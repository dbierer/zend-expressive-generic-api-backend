<?php 
namespace Common\Table;

/**
 * Defines methods which access this table:
 *
CREATE TABLE `group` (
  `groupID` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(128) NOT NULL,
  PRIMARY KEY (`groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
 *
 * @author: doug@unlikelysource.com
 * @OA\Schema(schema="Common\Entity\Group")
 */

class Group extends Base
{
}
