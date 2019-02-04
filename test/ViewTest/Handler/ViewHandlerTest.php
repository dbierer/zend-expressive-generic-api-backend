<?php
declare(strict_types=1);

namespace ViewTest\Handler;

use View\Handler\ViewHandler;
use Common\Generic\Constants;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\ServiceManager;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;

class ViewHandlerTest extends TestCase
{
    /** @var ContainerInterface|ObjectProphecy */
    protected $container;

    /** @var RouterInterface|ObjectProphecy */
    protected $router;

    /** @var ServerRequestInterface */
    protected $request;
    
    /** @var Data\Service\DataService */
    private $service;

    protected function setUp()
    {
        global $container;      // ServiceManager instance with real configuration from test bootstrap
        $this->container  = $container;
        $this->router    = $this->prophesize(RouterInterface::class);
        $this->request   = ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
    }

    public function testReturnsJsonResponse()
    {
        $homePage = new ViewHandler(
            $this->container,
            $this->router->reveal()
        );
        $response = $homePage->handle($this->request);
        $this->assertInstanceOf(JsonResponse::class, $response);
    }

}
