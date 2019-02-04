<?php
namespace Common\Middleware\Factory;

use Psr\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;

/**
 * @OA\Schema(schema="Common\Middleware\Factory\CommonMiddlewareFactory")
 */
class CommonMiddlewareFactory
{
    /**
     * Injects service container and router into middleware requested
     * @param ContainerInterface $container == service container (i.e. ServiceManager)
     * @param string $requestedName == name of the middleware class to be created
     */
    public function __invoke(ContainerInterface $container, $requestedName)
    {
        $router   = $container->get(RouterInterface::class);
        return new $requestedName($container, $router);
    }
}
