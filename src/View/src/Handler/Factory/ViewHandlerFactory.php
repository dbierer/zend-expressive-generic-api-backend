<?php
declare(strict_types=1);

namespace View\Handler\Factory;

use View\Handler\ViewHandler;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router\RouterInterface;

class ViewHandlerFactory
{
    /**
     * @param Psr\Container\ContainerInterface $container
     * @return Pages\Handler\PagesHandler $handler
     */
    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {
        $router   = $container->get(RouterInterface::class);
        return new ViewHandler($container, $router);
    }
}
