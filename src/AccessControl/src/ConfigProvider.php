<?php
namespace AccessControl;

/**
 * The configuration provider for the AccessControl module, which draws from Authentication to control access to resources via "permission tags"
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
 
use Common\Middleware\Factory\CommonMiddlewareFactory;

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
     */
    public function getDependencies() : array
    {
        return [
            'factories' => [
                Middleware\AclMiddleware::class => CommonMiddlewareFactory::class,
            ],
        ];
    }
}
