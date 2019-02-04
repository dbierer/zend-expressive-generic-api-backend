<?php
declare(strict_types=1);
namespace Common\Middleware;

use Common\Generic\Constants;
use Common\Entity\ {Site as SiteEntity,Pubtool as PubtoolEntity,View as ViewEntity};
use Common\Table\ {Site as SiteTable,Pubtool as PubtoolTable,View as ViewTable};

use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router\RouterInterface;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Checks the request for the following parameters: Constants::KEY_SITE, Constants::KEY_PUBTOOL and Constants::KEY_VIEW
 * If params not found adds defaults: Constants::DEFAULT_SITE, Constants::DEFAULT_PUBTOOL, Constants::DEFAULT_VIEW
 * Adds collection of Common\Entity\Site instances to the Request object using Constants::KEY_SITE_LIST
 * Adds collection of Common\Entity\Pubtool instances for this site to the Request object using Constants::KEY_PUBTOOL_LIST
 * 
 * Exits immediately if the route does not match Common\Generic\Constants::VIEW_BASE_URL
 *
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Middleware\SitePubViewMiddleware")
 */

class SitePubViewMiddleware implements MiddlewareInterface
{

    /** 
     * @var Psr\Container\ContainerInterface
     * @OA\Property()
     */
    protected $container;

    /**
     * @var Zend\Expressive\Router\RouterInterface
     * @OA\Property()
     */
    protected $router;

    /** 
     * @var Pages\Service\PagesService 
     * @OA\Property()
     */
    protected $service;

    /** 
     * @var Common\Table\Site 
     * @OA\Property()
     */
    protected $siteTable;

    /** 
     * @var Common\Table\Pubtool 
     * @OA\Property()
     */
    protected $pubtoolTable;

    /** 
     * @var Common\Table\View
     * @OA\Property()
     */
    protected $viewTable;

    /** 
     * @var array Common\Entity\Site
     * @OA\Property(@OA\Items(schema="Common\Entity\Site"))
     */
    protected $siteList;

    /** 
     * @var array Common\Entity\Pubtool
     * @OA\Property(@OA\Items(schema="Common\Entity\Pubtool"))
     */
    protected $pubtoolList;

    /**
     * @param Psr\Container\ContainerInterface $container
     * @param Zend\Expressive\Router\RouterInterface
     */
    public function __construct(ContainerInterface $container, RouterInterface $router)
    {
        $this->container    = $container;
        $this->router       = $router;
        $this->siteTable    = $container->get(SiteTable::class);
        $this->pubtoolTable = $container->get(PubtoolTable::class);
        $this->viewTable    = $container->get(ViewTable::class);
    }

    /**
     * If $params[Constants::KEY_SITE] is not provided, substitutes default Constants::DEFAULT_SITE
     * If $params[Constants::KEY_PUBTOOL] is not provided, substitutes default Constants::DEFAULT_PUBTOOL
     * If $params[Constants::KEY_VIEW] is not provided, substitutes default Constants::DEFAULT_VIEW
     * It then does a lookup to make sure the site and pubtool exists
     * If not exists, returns errors
     *
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @return Zend\Diactoros\Response\JsonResponse $response
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
        // check to see if path matches Constants::ROUTE_VIEW
        if (strpos($request->getRequestTarget(), Constants::ROUTE_VIEW) === FALSE) {
            // continue to next middleware
            return $handler->handle($request);
        }
        
        // init vars
        $lookup  = 0;
        $count   = 3;   // 3 things to check: site, pubtool and view
        $data    = [];
        $errors  = [];
        $params  = $request->getAttributes();    // request params
        
        // verify site param or substitute default
        $lookup += $this->checkOut(Constants::KEY_SITE, 
                                  Constants::DEFAULT_SITE, 
                                  $this->siteTable, 
                                  Constants::ERROR_SITE_LOOKUP, 
                                  $data,
                                  $params, 
                                  $errors
        );
        
        // verify pubtool param or substitute default
        $lookup += $this->checkOut(Constants::KEY_PUBTOOL, 
                                  Constants::DEFAULT_PUBTOOL, 
                                  $this->pubtoolTable, 
                                  Constants::ERROR_PUBTOOL_LOOKUP, 
                                  $data,
                                  $params, 
                                  $errors
        );
        
        // verify view param or substitute default
        $lookup += $this->checkOut(Constants::KEY_VIEW, 
                                  Constants::DEFAULT_VIEW, 
                                  $this->viewTable, 
                                  Constants::ERROR_VIEW_LOOKUP, 
                                  $data,
                                  $params, 
                                  $errors
        );
        
        // bail out if errors
        if ($lookup != $count) {
            $data[Constants::KEY_RESPONSE_ERROR] = $errors;
            return new JsonResponse($data);
        }

        // get list of sites
        $this->siteList = $this->siteTable->getSiteNames();
        
        // get list of pubtools for this site
        $this->pubtoolList = $this->pubtoolTable->findPubtoolsBySiteName($params[Constants::KEY_SITE]);
        
        // Inject data into the request
        $request->withAttribute(Constants::KEY_SITE, $this->siteList[Constants::KEY_SITE])
                ->withAttribute(Constants::KEY_PUBTOOL, $this->siteList[Constants::KEY_PUBTOOL])
                ->withAttribute(Constants::KEY_VIEW, $this->siteList[Constants::KEY_VIEW])
                ->withAttribute(Constants::KEY_SITE_LIST, $this->siteList)
                ->withAttribute(Constants::KEY_PUBTOOL_LIST, $this->pubtoolList);
                
        // Call the next middleware and wait for the response
        $response = $handler->handle($request);

        // Step 4: Return the response
        return $response;
    }

    /**
     * Checks to see if parameter is present
     * If not, substitutes default
     * If the database lookup fails, adds to error and returns 0
     * 
     * @param string $key == Constants::KEY_(SITE|PUBTOOL|VIEW)
     * @param string $default == Constants::DEFAULT_(SITE|PUBTOOL|VIEW)
     * @param Common\Table\TableInterface $table
     * @param string $errMessage == Constants::ERROR_(SITE|PUBTOOL|VIEW)_LOOKUP
     * @param array $params == request params
     * @param array $errors
     * @return int 1 = OK | 0 = lookup failed
     */
    protected function checkOut($key, $default, $table, $errMessage, &$params, &$errors)
    {
        // init vars
        $success = 1;
        
        // if pubtool param not set, substitute default
        if (!isset($params[$key])) {
            $params[$key] = $default;
        }

        // lookup pubtool
        if (!$pubtool = $table->findByName($params[$key])) {
            $success = 0;
            $errors[$key] = $errMessage;
        }

        return $success;
    }
}
