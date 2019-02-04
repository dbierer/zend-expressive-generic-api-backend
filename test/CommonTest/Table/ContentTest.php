<?php
namespace CommonTest\Table;

use Common\Table\Content as ContentTable;
use Common\Entity\Content as ContentEntity;

class ContentTest extends Base
{
    protected $tableClass = ContentTable::class;
    protected $entityClass = ContentEntity::class;
    public function testInstanceOfTableInterface()
    {
        $this->assertEquals(TRUE, in_array('Common\Table\TableInterface', class_implements($this->table)));
    }
    public function testFindAllReturnsAssociatedEntity()
    {
        $entity = $this->table->findAll()->current();
        $this->assertInstanceOf($this->entityClass, $entity);
    }
}
