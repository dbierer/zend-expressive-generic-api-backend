<?php

declare(strict_types=1);

namespace ViewTest\Handler\Factory;

use View\Handler\ViewHandler;
use View\Handler\Factory\ViewHandlerFactory;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;

class ViewHandlerFactoryTest extends TestCase
{
    /** @var ContainerInterface|ObjectProphecy */
    protected $container;

    protected function setUp()
    {
        global $container;      // ServiceManager instance with real configuration from test bootstrap
        $this->container  = $container;
        $router  = $this->prophesize(RouterInterface::class);
    }

    public function testFactory()
    {
        $factory = new ViewHandlerFactory();
        $handler = $factory($this->container);
        $this->assertInstanceOf(ViewHandler::class, $handler);
    }

}
