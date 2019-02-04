<?php
declare(strict_types=1);
namespace Common\Table;

use Common\Entity\EntityInterface;
use Zend\Db\TableGateway\TableGateway;

interface TableInterface
{
    /**
     * Populates the $tableGateway property
     *
     * @param Zend\Db\TableGateway\TableGateway $tableGateway
     */
    public function __construct(TableGateway $tableGateway);
    /**
     * Returns an array of Common\Entity\EntityInterface classes
     * <ENTITY_NAME> is derived from the name of the table class
     * or boolean FALSE if nothing found
     *
     * @return array $entities | FALSE
     */
    public function findAll();
    /**
     * If found, returns an instance of Common\Entity\EntityInterface
     * <ENTITY_NAME> is derived from the name of the table class
     * If not found, returns boolean FALSE
     *
     * @return Common\Entity\EntityInterface $entity | boolean FALSE
     */
    public function findById(int $id);
    /**
     * Either inserts or updates depending on whether or not this entity already exists
     * Returns the number of rows affected
     *
     * @param Common\Entity\EntityInterface $entity
     * @return int $result
     */
    public function save(EntityInterface $entity) : int;
    /**
     * Removes database entry corresponding to $entity
     * Returns number of rows affected
     *
     * @return int $result
     */
    public function remove(EntityInterface $entity) : int;
    /**
     * Extracts data and ID value from $entity
     * Populates $this->data with extracted values from $entity
     *
     * @param Common\Entity\EntityInterface $entity
     * @return mixed $id = value of ID column
     */
    public function getDataAndId(EntityInterface $entity);
    /**
     * Returns the contents of $this->data
     *
     * @return array $data
     */
    public function getData();
    /**
     * Returns the contents of $this->tableGateway
     *
     * @return Zend\Db\TableGateway\TableGateway $tableGateway
     */
    public function getTableGateway();
}
