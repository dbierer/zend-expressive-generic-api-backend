<?php
declare(strict_types=1);

namespace CommonTest\Middleware;

use Common\Middleware\SitePubViewMiddleware;
use Common\Generic\Constants;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;

class SitePubViewMiddlewareTest extends TestCase
{
    /** @var ContainerInterface|ObjectProphecy */
    protected $container;

    /** @var RouterInterface|ObjectProphecy */
    protected $router;

    /** @var ServerRequestInterface */
    protected $request;
    
    /** @var ResponseInterface */
    protected $response;
    
    /** @var Data\Service\DataService */
    private $service;

    /** @var Psr\Http\Server\RequestHandlerInterface */
    private $handler;

    /** @var Common\Middleware\SitePubViewMiddleware */
    private $middleware;
        
    protected function setUp()
    {
        global $container;      // ServiceManager instance with real configuration from test bootstrap
        $this->container  = $container;
        $this->router     = $this->prophesize(RouterInterface::class);
        $this->service    = $this->prophesize(DataService::class);
        $this->handler    = $this->prophesize(RequestHandlerInterface::class);
        $this->request    = ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
        $this->response   = $this->prophesize(ResponseInterface::class);
        $this->middleware = new SitePubViewMiddleware($this->container, $this->router->reveal());
    }

    public function testReturnsJsonResponse()
    {
        $response = $this->middleware->process($this->request, $this->handler->reveal());
        $this->assertInstanceOf(JsonResponse::class, $response);
    }

    public function testReturnsDefaultIfSiteParamNotProvided()
    {
        $response = $this->middleware->process($this->request, $this->handler->reveal())->willReturn($this->response->reveal());
        $payload  = $response->getPayload();
        $this->assertArrayHasKey(Constants::KEY_SITE, $payload[Constants::DEFAULT_SITE]);
    }

    public function testReturnsErrorIfSiteParamNoGood()
    {
        $this->request->withAttribute(Constants::SITE_KEY, 'NoGood');
        $response = $this->middleware->process($this->request, $this->handler->reveal())->willReturn($this->response->reveal());
        $payload  = $response->getPayload();
        $this->assertArrayHasKey(Constants::KEY_SITE, $payload[Constants::KEY_RESPONSE_ERROR]);
    }

    public function testRedirectsIfTargetNotConstantsRouteView()
    {
        $this->request->withTarget('/');
        $response = $this->middleware->process($this->request, $this->handler->reveal());
        $payload  = $response->getPayload();
        var_dump($payload);
    }

}
