<?php
declare(strict_types=1);
namespace Common\Table;

use Exception;
use Common\Entity\EntityInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\ServiceManager;
/**
 * Base class which defines TableGateway for each class in this namespace
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Table\Base")
*/
abstract class Base implements TableInterface
{
    /**
     * @var array $data
     * @OA\Property(property="name",type="array",items="Common\Entity\EntityInterface")
     */
    protected $data = [];
    /**
     * @var Zend\Db\TableGateway\TableGateway
     * @OA\Property()
     */
    protected $tableGateway = null;
    /**
     * @var Zend\ServiceManager\ServiceManager
     * @OA\Property()
     */
    protected $container = null;
    /**
     * Populates the tableGateway and service containers properties
     *
     * @param Zend\Db\TableGateway\TableGateway $tableGateway
     * @param Zend\ServiceManager\ServiceManager $container
     */
    public function __construct(TableGateway $tableGateway, ServiceManager $container)
    {
        $this->tableGateway = $tableGateway;
        $this->container = $container;
    }
    /**
     * Returns an array of Common\Entity\EntityInterface classes
     * <ENTITY_NAME> is derived from the name of the table class
     * or boolean FALSE if nothing found
     *
     * @return array $entities | FALSE
     */
    public function findAll()
    {
        return $this->tableGateway->select();
    }
    /**
     * If found, returns an instance of Common\Entity\EntityInterface
     * <ENTITY_NAME> is derived from the name of the table class
     * If not found, returns boolean FALSE
     *
     * @return Common\Entity\EntityInterface $entity | boolean FALSE
     */
    public function findById(int $id)
    {
        $result = $this->tableGateway->select([$this->getIdColumn() => $id]);
        return ($result) ? $result->current() : false;
    }
    /**
     * Either inserts or updates depending on whether or not this entity already exists
     * Returns the number of rows affected
     *
     * @param Common\Entity\EntityInterface $entity
     * @return int $result
     */
    public function save(EntityInterface $entity) : int
    {
        // extract data from $entity
        $id = $this->getDataAndId($entity);
        // make a copy of $this->data which was populated by $this->getDataAndId()
        $data = $this->getData();
        // lookup to see if entry already exists
        $found = $this->findById($id);
        // if so, do an update
        if ($found) {
            // need to remove ID to avoid problems with update
            unset($data[$id]);
            $result = $this->tableGateway->update($data, [$entity->getIdColumn() => $id]);
        } else {
            // otherwise do an insert
            $result = $this->tableGateway->insert($data);
        }
        return $result;
    }
    /**
     * Removes database entry corresponding to $entity
     * Returns number of rows affected
     *
     * @return int $result
     */
    public function remove(EntityInterface $entity) : int
    {
        $id = $this->getDataAndId($entity);
        return $this->tableGateway->delete([$entity->getIdColumn() => $id]);
    }
    /**
     * Extracts data and ID value from $entity
     * Populates $this->data with extracted values from $entity
     *
     * @param Common\Entity\EntityInterface $entity
     * @return mixed $id = value of ID column
     */
    public function getDataAndId(EntityInterface $entity)
    {
        $hydrator = $this->tableGateway->getResultSet()->getHydrator();
        $this->data = $hydrator->extract($entity);
        return $data[$entity->getIdColumn()];
    }
    /**
     * Returns the contents of $this->data
     *
     * @return array $data
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Returns the contents of $this->tableGateway
     *
     * @return Zend\Db\TableGateway\TableGateway $tableGateway
     */
    public function getTableGateway()
    {
        return $this->tableGateway;
    }
}
