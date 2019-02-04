<?php
namespace Common\Entity;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site` (
  `siteID` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(128) NOT NULL,
  `site_url` varchar(128) NOT NULL,
  `site_permissions_tag` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`siteID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8

 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Entity\Site")
*/

use Common\Entity\Base;

class Site extends Base
{
    /**
     * primary key
     * @var int
     * @OA\Property()
     */
    public $siteID;                 //  int(11) NOT NULL AUTO_INCREMENT,
    /**
     * @var string
     * @OA\Property()
     */
    public $site_name;              //  varchar(128) NOT NULL,
    /**
     * @var string
     * @OA\Property()
     */
    public $site_url;               //  varchar(128) NOT NULL,
    /**
     * unique permission tag, used in an ACL assignment
     * @var string
     * @OA\Property()
     */
    public $site_permissions_tag;   // varchar(128) DEFAULT NULL,
}
