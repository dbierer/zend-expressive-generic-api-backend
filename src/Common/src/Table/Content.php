<?php
declare(strict_types=1);
namespace Common\Table;

/**
 * Defines methods which access this table:
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
    `content_publishing_status_id` tinyint(4) DEFAULT NULL,
    `content_can_delete` tinyint(4) unsigned DEFAULT '1',
    `content_completed_status` tinyint(4) unsigned DEFAULT '0',
    `content_permissions_tag` varchar(128) DEFAULT NULL,
    `pubtool_pubtool_id` int(11) DEFAULT NULL,
    `site_site_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`contentID`)
) ENGINE=InnoDB AUTO_INCREMENT=548 DEFAULT CHARSET=utf8;

 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Table\Content")
*/

class Content extends Base
{
    /**
     * Get content based on Site
     *
     * @param int $id
     * @return array Common\Entity\Content
     */
    public function getContentBySiteId(int $id)
    {
        return $this->tableGateway->select(['site_site_id' => $id]);
    }
    /**
     * Get content based on PubTool ID
     *
     * @param int $id
     * @return array Common\Entity\Content
     */
    public function getContentByPubToolId(int $id)
    {
        return $this->tableGateway->select(['pubtool_pubtool_id' => $id]);
    }
    /**
     * Get content based on both Site and PubTool ID
     *
     * @param int $siteID
     * @param int $pubToolID
     * @return array Common\Entity\Content
     */
    public function getContentBySiteIdAndPubToolId(int $siteID, int $pubToolID)
    {
        return $this->tableGateway
                    ->select(
                        [
                            'site_site_id' => $siteID,
                            'pubtool_pubtool_id' => $pubToolID
                        ]
                    );
    }
}
