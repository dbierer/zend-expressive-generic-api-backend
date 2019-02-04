<?php
namespace Common\Entity;

/**
 * Represents `content` table
 * 
CREATE TABLE `content` (
    `contentID` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `content_title` varchar(254) DEFAULT NULL,
    `content_show_title` tinyint(4) unsigned DEFAULT '1',
    `content_body` text,
    `content_permalink_id` int(11) DEFAULT NULL,
    `content_meta_title` varchar(254) DEFAULT NULL,
    `content_meta_keyword` varchar(254) DEFAULT NULL,
    `content_meta_description` varchar(1024) DEFAULT NULL,
    `content_display_order` int(11) DEFAULT NULL,
    `content_created_date` datetime DEFAULT CURRENT_TIMESTAMP,
    `content_created_by` int(11) DEFAULT NULL,
    `content_modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
    `content_modified_by` int(11) DEFAULT NULL,
    `content_published_date` datetime DEFAULT NULL,
    `content_publishing_status` char(16) DEFAULT NULL,
    `content_can_delete` tinyint(4) unsigned DEFAULT '1',
    `content_completed_status` tinyint(4) unsigned DEFAULT '0',
    `content_permissions_tag` varchar(128) DEFAULT NULL,
    `pubtool_pubtool_id` int(11) DEFAULT NULL,
    `site_site_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`contentID`)
) ENGINE=InnoDB AUTO_INCREMENT=548 DEFAULT CHARSET=utf8;

 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Entity\Content")
*/

class Content extends Base
{
    /**
     * primary key
     * @var int
     * @OA\Property()
     */
    public $contentID;
    /**
     * @var string
     * @OA\Property()
     */
    public $content_title;
    /**
     * @var tinyint
     * @OA\Property()
     */
    public $content_show_title;
    /**
     * @var text
     * @OA\Property()
     */
    public $content_body;
    /**
     * @var int
     * @OA\Property()
     */
    public $content_permalink_id;
    /**
     * @var string
     * @OA\Property()
     */
    public $content_meta_title;
    /**
     * @var string
     * @OA\Property()
     */
    public $content_meta_keyword;
    /**
     * @var string
     * @OA\Property()
     */
    public $content_meta_description;
    /**
     * @var int
     * @OA\Property()
     */
    public $content_display_order;
    /**
     * @var datetime
     * @OA\Property()
     */
    public $content_created_date;
    /**
     * Links to _user_ table; identifies who created the content
     * @var int
     * @OA\Property()
     */
    public $content_created_by;
    /**
     * @var datetime
     * @OA\Property()
     */
    public $content_modified_date;
    /**
     * Links to _user_ table; identifies who last modified the content
     * @var int
     * @OA\Property()
     */
    public $content_modified_by;
    /**
     * @var datetime
     * @OA\Property()
     */
    public $content_published_date;
    /**
     * @var char
     * @OA\Property()
     */
    public $content_publishing_status;
    /**
     * @var tinyint
     * @OA\Property()
     */
    public $content_can_delete;
    /**
     * @var tinyint
     * @OA\Property()
     */
    public $content_completed_status;
    /**
     * unique permission tag, used in an ACL assignment
     * @var string
     * @OA\Property()
     */
    public $content_permissions_tag;
    /**
     * @var int
     * @OA\Property()
     */
    public $pubtool_pubtool_id;
    /**
     * @var int
     * @OA\Property()
     */
    public $site_site_id;
}
