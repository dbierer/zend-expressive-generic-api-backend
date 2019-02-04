<?php
namespace Common\Entity;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `view` (
    `viewID` int(11) NOT NULL AUTO_INCREMENT,
    `view_permalink` varchar(254) NOT NULL,
    `view_data_structure` varchar(4096) DEFAULT NULL,
    `view_type` enum('CLASS,JSON') DEFAULT NULL,
    `view_permissions_tag` varchar(128) DEFAULT NULL,
    `pubtool_pubtool_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`viewID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Entity\View")
*/

class View extends Base
{
    /**
     * primary key
     * @var int
     * @OA\Property()
     */
    public $viewID;
    /** 
     * @var string 
     * @OA\Property()
     */
    public $view_permalink;
    /** 
     * @var string 
     * @OA\Property()
     */
    public $view_type;  // CLASS | JSON
    /**
     * class name of data to output | output data structure
     * @var string
     * @todo for now use a view class; need to figure out a way to allows users to customize going forward
     * @OA\Property()
     */
    public $view_data_structure;
    /**
     * unique permission tag, used in an ACL assignment
     * @var string
     * @OA\Property()
     */
    public $view_permissions_tag;
    /**
     * @var int
     * @OA\Property()
     */
    public $pubtool_pubtool_id;
}
