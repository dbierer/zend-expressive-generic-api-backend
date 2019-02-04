<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Zend\Expressive\Application;
use Zend\Expressive\MiddlewareFactory;
use Common\Generic\Constants;

/**
 * Setup routes with a single request method:
 *
 * $app->get('/', App\Handler\HomePageHandler::class, 'home');
 * $app->post('/album', App\Handler\AlbumCreateHandler::class, 'album.create');
 * $app->put('/album/:id', App\Handler\AlbumUpdateHandler::class, 'album.put');
 * $app->patch('/album/:id', App\Handler\AlbumUpdateHandler::class, 'album.patch');
 * $app->delete('/album/:id', App\Handler\AlbumDeleteHandler::class, 'album.delete');
 *
 * Or with multiple request methods:
 *
 * $app->route('/contact', App\Handler\ContactHandler::class, ['GET', 'POST', ...], 'contact');
 *
 * Or handling all request methods:
 *
 * $app->route('/contact', App\Handler\ContactHandler::class)->setName('contact');
 *
 * or:
 *
 * $app->route(
 *     '/contact',
 *     App\Handler\ContactHandler::class,
 *     Zend\Expressive\Router\Route::HTTP_METHOD_ANY,
 *     'contact'
 * );
 */
return function (Application $app, MiddlewareFactory $factory, ContainerInterface $container) : void {
    // home page
    $app->get('/', App\Handler\HomePageHandler::class, 'home');
    $app->get('/api[/]', App\Handler\HomePageHandler::class, 'api.home');
    // demo
    $app->get('/api/ping', App\Handler\PingHandler::class, 'api.ping');
    // admin
    $app->get(Constants::ROUTE_ADMIN    . '/:table/:id[/:page]', Admin\Handler\ListHandler::class,   'api.admin.list');
    $app->put(Constants::ROUTE_ADMIN    . '/:table/:id',         Admin\Handler\EditHandler::class,   'api.admin.put');
    $app->post(Constants::ROUTE_ADMIN   . '/:table',             Admin\Handler\AddHandler::class,    'api.admin.add');
    $app->patch(Constants::ROUTE_ADMIN  . '/:table/:id',         Admin\Handler\EditHandler::class,   'api.admin.patch');
    $app->delete(Constants::ROUTE_ADMIN . '/:table/:id',         Admin\Handler\DeleteHandler::class, 'api.admin.delete');
    // view
    $app->get(Constants::ROUTE_VIEW . '[/:site][/:pubTool][/:view]', View\Handler\ViewHandler::class,    'api.view');
};
