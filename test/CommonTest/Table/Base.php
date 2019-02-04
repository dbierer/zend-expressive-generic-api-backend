<?php
namespace CommonTest\Table;

use PHPUnit\Framework\TestCase;

abstract class Base extends TestCase
{
    protected $table;
    protected $connection;
    protected $tableClass = '';
    protected $entityClass = '';
    public function setup()
    {
        global $container;      // ServiceManager container created by test bootstrap
        $this->table = $container->get($this->tableClass);
        // start transaction
        $this->connection = $this->table->getTableGateway()->getAdapter()->getDriver()->getConnection();
        $this->connection->beginTransaction();
    }
    public function teardown()
    {
        // rollback transaction
        $this->connection->rollback();
    }
}
