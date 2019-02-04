<?php
namespace AccessControl\Middleware;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;

/**
 * Checks user identity and gets group membership
 * Retrieves appropriate permissions tags
 * Verifies access against ACL
 * 
 * @author: doug@unlikelysource.com
 * @OA\Schema(schema="Aclentication\Middleware\AclMiddleware")
 */
class AclMiddleware implements MiddlewareInterface
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
     * @param Psr\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container, RouterInterface $router)
    {
        $this->container = $container;
        $this->router    = $router;
    }
    /**
     * Checks user identity and gets group membership
     * Pulls up ACL
     * Verifies access OK via route requested
     * Verifies access OK via 
     * 
     * @todo: define logic in this method
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @param Psr\Http\Server\RequestHandlerInterface $handler
     * @return Psr\Http\Message\ResponseInterface $response
     * @author: doug@unlikelysource.com
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
        // get user identity + group membership
        // get ACL from the container
        return $handler->handle($request);
    }
}
