<?php
namespace CommonTest\Entity;

use Common\Entity\Content;
use PHPUnit\Framework\TestCase;

class ContentTest extends TestCase
{
    protected $idCol = 'contentID';
    protected $data = [
        'contentID'                 => 10001,
        'content_title'             => 'Test',        
        'content_show_title'        => 1,                     //  tinyint(4) unsigned DEFAULT '1', 
        'content_body'              => 'Content Body',        //  text, 
        'content_permalink_id'      => 1,                     //  int(11) DEFAULT NULL, 
        'content_meta_title'        => 'Meta Title',          //  varchar(254) DEFAULT NULL, 
        'content_meta_keyword'      => 'Meta Keyword',        //  varchar(254) DEFAULT NULL, 
        'content_meta_description'  => 'Meta Description',    //  varchar(1024) DEFAULT NULL, 
        'content_display_order'     => NULL,                  //  int(11) DEFAULT NULL, 
        'content_created_date'      => '2019-01-01 00:00:00', //  datetime DEFAULT CURRENT_TIMESTAMP, 
        'content_created_by'        => '',                    //  int(11) DEFAULT NULL, 
        'content_modified_date'     => '2019-01-02 02:02:02', //  datetime DEFAULT CURRENT_TIMESTAMP, 
        'content_modified_by'       => '',                    //  int(11) DEFAULT NULL, 
        'content_published_date'    => '2019-01-01 00:00:00', //  datetime DEFAULT NULL, 
        'content_publishing_status' => 'published',           //  char(16) DEFAULT NULL, (see dependencies.global.php::publishing-status)
        'content_can_delete'        => 1,                     //  tinyint(4) unsigned DEFAULT '1',
        'content_show_title'        => 1,                     //  tinyint(4) unsigned DEFAULT '1', 
        'content_body'              => 'Content Body',        //  text, 
        'content_permalink_id'      => 1,                     //  int(11) DEFAULT NULL, 
        'content_meta_title'        => 'Meta Title',          //  varchar(254) DEFAULT NULL, 
        'content_meta_keyword'      => 'Meta Keyword',        //  varchar(254) DEFAULT NULL, 
        'content_meta_description'  => 'Meta Description',    //  varchar(1024) DEFAULT NULL, 
        'content_display_order'     => NULL,                  //  int(11) DEFAULT NULL, 
        'content_created_date'      => '2019-01-01 00:00:00', //  datetime DEFAULT CURRENT_TIMESTAMP, 
        'content_created_by'        => '',                    //  int(11) DEFAULT NULL, 
        'content_modified_date'     => '2019-01-02 02:02:02', //  datetime DEFAULT CURRENT_TIMESTAMP, 
        'content_modified_by'       => '',                    //  int(11) DEFAULT NULL, 
        'content_published_date'    => '2019-01-01 00:00:00', //  datetime DEFAULT NULL, 
        'content_completed_status'  => 0,                     //  tinyint(4) unsigned DEFAULT '0', 
        'content_permissions_tag'   => NULL,                  //  varchar(128) DEFAULT NULL, 
        'pub_tool_pub_toolID'       => NULL,                  //  int(11) DEFAULT NULL, 
        'pub_tool_site_siteID'      => NULL,                  //  int(11) DEFAULT NULL, 
    ];
    protected $badData = [
        'contentID' => 10001,
        'content_title' => 'Test',        
        'ColumnDoesNotExist' => 'This does not match an existing property',
    ];
    public function testEntityPopulatesFromArrayInConstructor()
    {
        $entity = new Content($this->data);
        $vars   = get_object_vars($entity);
        $this->assertCount(count($this->data), $vars);
    }
    public function testEntityOnlyStoresValuesForExistingProperties()
    {
        $entity = new Content($this->badData);
        $vars   = get_object_vars($entity);
        $this->assertNotEquals(count($vars), count($this->badData));
    }
    public function testEntityReturnsCorrectIdCol()
    {
        $entity = new Content($this->data);        
        $this->assertEquals($this->idCol, $entity->getIdColumn());        
    }
}
