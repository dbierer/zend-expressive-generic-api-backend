<?php 
namespace Common\Table;

/**
 * Defines methods which access this table:
 *
CREATE TABLE `permission` (
  `permissionID` int(11) NOT NULL AUTO_INCREMENT,
  `permission_tag` varchar(128) NOT NULL,
  PRIMARY KEY (`permissionID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
 *
 * @author: doug@unlikelysource.com
 * @OA\Schema(schema="Common\Table\Permission")
 */

class Permission extends Base
{
}
