<?php
namespace CommonTest\Table;

use Common\Generic\Constants;
use Common\Table\Site as SiteTable;
use Common\Entity\Site as SiteEntity;

class SiteTest extends Base
{
    const TEST_SITE_ID = 1;
    protected $tableClass = SiteTable::class;
    protected $entityClass = SiteEntity::class;
    public function testInstanceOfTableInterface()
    {
        $this->assertEquals(TRUE, in_array('Common\Table\TableInterface', class_implements($this->table)));
    }
    public function testFindAllReturnsAssociatedEntity()
    {
        $entity = $this->table->findAll()->current();
        $this->assertInstanceOf($this->entityClass, $entity);
    }
    public function testGetSiteNamesReturnsArrayWithSiteIDAndNameKeys()
    {
        $names = $this->table->getSiteNames();
        $this->assertEquals(TRUE, is_array($names));
        $this->assertEquals(TRUE, isset($names[self::TEST_SITE_ID]),'Site ID ' . self::TEST_SITE_ID . ' is missing');
        $this->assertEquals(TRUE, isset($names[Constants::DEFAULT_SITE]),'Site Name ' . Constants::DEFAULT_SITE . ' is missing');
    }
}
