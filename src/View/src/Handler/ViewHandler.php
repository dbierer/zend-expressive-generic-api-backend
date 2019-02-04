<?php
declare(strict_types=1);
namespace View\Handler;

use Common\Generic\Constants;
use Common\Table\ {Site as SiteTable,Pubtool as PubtoolTable,View as ViewTable};
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\ServiceManager\ServiceManager;

/**
 * Handles requests to /api/data
 * 
 * @OA\Get(
 *      path="/api/view{/site}{/pubtool}{/view}{/contentID}",
 *      summary="Returns data for site, pubtool and view.  The view actually selects a _strategy_ which represents the logic needed to produce the desired data view.",
 *      @OA\Parameter(name="site",@OA\Schema(type="string"),in="query",description="amra_org,uics_org or motorist_org"),
 *      @OA\Parameter(name="pubtool",@OA\Schema(type="string"),in="query",description="pages,component,glossary,etc."),
 *      @OA\Parameter(name="view",@OA\Schema(type="string"),in="query",description="dashboard,detail,edit"),
 *      @OA\Parameter(name="contentID",@OA\Schema(type="integer"),in="query",description="if present, GET returns 1 item from _content_ table"),
 *      @OA\Response(response="200", description="one or more data structures which correspond to the site, pubtool and view requested")
 * 
 * )
 */

class ViewHandler implements RequestHandlerInterface
{

    /** @var Zend\ServiceManager\ServiceManager */
    protected $container;

    /** @var Router\RouterInterface */
    protected $router;

    /** @var Common\Table\Site */
    protected $siteTable;

    /** @var Common\Table\Pubtool */
    protected $pubtoolTable;

    /** @var Common\Table\View */
    protected $viewTable;

    /**
     * @param Zend\ServiceManager\ServiceManager $container
     * @param Zend\Expressive\Router\RouterInterface $router
     */
    public function __construct(ServiceManager $container, Router\RouterInterface $router)
    {
        $this->container = $container;
        $this->router    = $router;
        // pull up table classes
        $this->siteTable    = $container->get(SiteTable::class);
        $this->pubtoolTable = $container->get(PubtoolTable::class);
        $this->viewTable    = $container->get(ViewTable::class);
    }

    /**
     * If $params[Constants::KEY_SITE] is not provided, returns { Constants::RESPONSE_KEY_ERROR : Constants::ERROR_SITE_KEY_MISSING }
     * Otherwise, returns:
     *
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @return Zend\Diactoros\Response\JsonResponse $response
     */
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        /*
        // init vars
        $data    = [];
        $params  = $request->getAttributes();    // grabs route params

        // load up the request with Site, Pubtool and View
        $request->setContent(
            [
                Constants::KEY_SITE    => $site,
                Constants::KEY_PUBTOOL => $pubtool,
                Constants::KEY_VIEW    => $view
            ]
        );
        // invoke next middleware
        // ???
        */
        return new JsonResponse(['test' => 'test']);
    }

}
