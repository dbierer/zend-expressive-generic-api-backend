<?php
namespace Common\Entity;

/**
 * Represents `pubtool` table
CREATE TABLE `pubtool` (
    `pubtoolID` int(11) NOT NULL AUTO_INCREMENT,
    `pubtool_name` varchar(128) NOT NULL,
    `pubtool_enabled` tinyint(4) DEFAULT 1,
    `pubtool_permissions_tag` varchar(128) DEFAULT NULL,
    `site_site_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`pubtoolID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Entity\Pubtool")
*/

class Pubtool extends Base
{
    /**
     * primary key
     * @var int
     * @OA\Property()
     */
    public $pubtoolID;                  //  int(11) NOT NULL AUTO_INCREMENT
    /**
     * @var string
     * @OA\Property()
     */
    public $pubtool_name;               //  varchar(128) NOT NULL
    /**
     * @var tinyint
     * @OA\Property()
     */
    public $pubtool_enabled;            //  tinyint(1) DEFAULT 1
    /**
     * unique permission tag, used in an ACL assignment
     * @var string
     * @OA\Property()
     */
    public $pubtool_permissions_tag;    // varchar(128) DEFAULT NULL,
    /**
     * @var int
     * @OA\Property()
     */
    public $site_site_id;               //  int(11) NOT NULL
}
