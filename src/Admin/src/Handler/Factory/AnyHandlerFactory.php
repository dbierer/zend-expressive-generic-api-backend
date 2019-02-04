<?php
namespace Admin\Handler\Factory;

use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

/**
 * Creates handler based on requested name
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Admin\Handler\Factory\AnyHandlerFactory")
*/
class AnyHandlerFactory
{
    /**
     * @param Psr\Container\ContainerInterface $container
     * @return Psr\Http\Server\RequestHandlerInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName) : RequestHandlerInterface
    {
        $router   = $container->get(RouterInterface::class);
        return new $requestedName($container, $router);
    }
}
