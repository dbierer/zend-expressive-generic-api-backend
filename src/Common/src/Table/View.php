<?php
namespace Common\Table;

/**
 * Defines methods which access this table:
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

 * MIGRATION NOTES: new table, new data
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Table\View")
*/

class View extends Base
{

}
