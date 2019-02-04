<?php
namespace CommonTest\Table;

use Common\Generic\Constants;
use Common\Table\Pubtool as PubtoolTable;
use Common\Entity\Pubtool as PubtoolEntity;

class PubtoolTest extends Base
{
    const TEST_SITE_ID = 1;
    protected $tableClass = PubtoolTable::class;
    protected $entityClass = PubtoolEntity::class;
    public function testInstanceOfTableInterface()
    {
        $this->assertEquals(TRUE, in_array('Common\Table\TableInterface', class_implements($this->table)));
    }
    public function testFindAllReturnsAssociatedEntity()
    {
        $entity = $this->table->findAll()->current();
        $this->assertInstanceOf($this->entityClass, $entity);
    }
    public function testFindPubToolsBySiteId()
    {
        $result = $this->table->findPubToolsBySiteId(self::TEST_SITE_ID);
        $this->assertEquals(TRUE, count($result));
    }
    public function testFindPubToolsByDefaultSiteName()
    {
        $result = $this->table->findPubToolsBySiteName(Constants::DEFAULT_SITE);
        $this->assertEquals(TRUE, count($result));
    }
}
