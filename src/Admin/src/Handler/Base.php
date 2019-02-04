<?php
namespace Admin\Handler;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router;
use Zend\Diactoros\Response\JsonResponse;

/**
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Admin\Handler\Base")
*/
abstract class Base implements RequestHandlerInterface
{
    /**
     * @var Psr\Container\ContainerInterface
     * @OA\Property()
     */
    protected $container;

    /** 
     * @var Router\RouterInterface 
     * @OA\Property()
     */
    protected $router;

    /**
     * @param Psr\Container\ContainerInterface $container
     * @param Zend\Expressive\Router $router
     */
    public function __construct(ContainerInterface $container, Router\RouterInterface $router) 
    {
        $this->container = $container;
        $this->router    = $router;
    }

    /**
     * Handles request
     * 
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @return Zend\Diactoros\Response\JsonResponse $response
     */
    abstract public function handle(ServerRequestInterface $request) : ResponseInterface;
}
