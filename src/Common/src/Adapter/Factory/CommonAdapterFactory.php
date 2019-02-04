<?php
namespace Common\Adapter\Factory;

use Common\Adapter\CommonAdapter;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Produces database adapter used in API
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Adapter\Factory\CommonAdapterFactory")
 */
class CommonAdapterFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CommonAdapter($container->get('db-config'));
    }
}
