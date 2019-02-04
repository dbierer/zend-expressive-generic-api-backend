<?php 
namespace Common\Entity;

/**
 * Represents `permission` table
 *
CREATE TABLE `permission` (
  `permissionID` int(11) NOT NULL AUTO_INCREMENT,
  `permission_tag` varchar(128) NOT NULL,
  PRIMARY KEY (`permissionID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
 *
 * @author: doug@unlikelysource.com
 * @OA\Schema(schema="Common\Entity\Permission")
 */

class Permission extends Base
{
    /**
     * @var TABLE 
     * @OA\Property()
     */
    public $CREATE;

    /**
     * @var int(11) 
     * @OA\Property()
     */
    public $permissionID;

    /**
     * @var varchar(128) 
     * @OA\Property()
     */
    public $permission_tag;

}
