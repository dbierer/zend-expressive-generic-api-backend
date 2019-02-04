<?php
namespace Common\Table;

/**
 * Defines methods which access this table:
 *
CREATE TABLE `permalink` (
    `permalinkID` int(11) NOT NULL AUTO_INCREMENT,
    `permalink` varchar(254) NOT NULL,
    PRIMARY KEY (`permalinkID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Table\Permalink")
*/

class Permalink extends Base
{
}
