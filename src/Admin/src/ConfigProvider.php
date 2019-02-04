<?php
namespace Admin;

/**
 * The configuration provider for the Admin module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
 
use Zend\ServiceManager\Factory\InvokableFactory;
use Admin\Handler\Factory\AnyHandlerFactory;
use Admin\Handler\ {AddHandler,ListHandler,EditHandler, DeleteHandler};

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
            'factories'  => [
                AddHandler::class => AnyHandlerFactory::class,
                ListHandler::class => AnyHandlerFactory::class,
                EditHandler::class => AnyHandlerFactory::class,
                DeleteHandler::class => AnyHandlerFactory::class,
            ],
        ];
    }
}
