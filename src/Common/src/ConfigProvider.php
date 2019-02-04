<?php
namespace Common;

use Common\Table;
use Common\Table\Factory\TableFactory;
use Common\Adapter\CommonAdapter;
use Common\Adapter\Factory\CommonAdapterFactory;
use Common\Middleware\SitePubViewMiddleware;
use Common\Middleware\Factory\CommonMiddlewareFactory;

/**
 * The configuration provider for the Common module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\ConfigProvider")
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     */
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    /**
     * Returns the container dependencies
     * 
     * @return array $dependencies
     */
    public function getDependencies() : array
    {
        return [
            'factories'  => [
                // middleware
                SitePubViewMiddleware::class => CommonMiddlewareFactory::class,
                // database adapter
                CommonAdapter::class         => CommonAdapterFactory::class,
                // classes for communicating with database tables
                Table\Site::class            => TableFactory::class,
                Table\Content::class         => TableFactory::class,
                Table\Pubtool::class         => TableFactory::class,
                Table\View::class            => TableFactory::class,
                Table\Permalink::class       => TableFactory::class,
            ],
        ];
    }
}
