<?php
/**
 * Same factory class can be used to build all Common\Table\TableInterface classes
 */
namespace Common\Table\Factory;

use Exception;
use Common\Adapter\CommonAdapter;
use Common\Table\TableInterface;
use Common\Entity\EntityInterface;
use Common\Generic\Constants;
use Common\Generic\CamelCaseUnderScore;
use Zend\Hydrator\ObjectProperty;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * @property Zend\ServiceManager\Factory\FactoryInterface
 */
class TableFactory implements FactoryInterface
{
    /**
     * @param Interop\Container\ContainerInterface $container == Zend\ServiceManager\ServiceManager
     * @param string $requestedName == name of Table Class to be created
     * @param array $options == no idea
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $parts = explode('\\', $requestedName);
        $class = end($parts);
        // build name of Common\Entity\EntityInterface class from last part of requested table name
        $fullEntity = Constants::COMMON_ENTITY_NAMESPACE . $class;
        // set up TableGateway to return an array of Common\Entity\EntityInterface instances
        $resultSet = new HydratingResultSet(new ObjectProperty(), new $fullEntity());
        // get table name from last part of requested table name; convert from camelCase to underscore
        $tableName = CamelCaseUnderScore::camelCaseToUnderscore($class);
        $adapter = $container->get(CommonAdapter::class);
        // build the TableGateway instance
        $tableGateway = new TableGateway($tableName, $adapter, null, $resultSet);
        // inject the TableGateway and service container (e.g. ServiceManager)
        $table = new $requestedName($tableGateway, $container);
        // run "init()" method if defined
        if (method_exists($table, 'init')) {
            $table->init();
        }
        // return the requested table class instance
        return $table;
    }
}
