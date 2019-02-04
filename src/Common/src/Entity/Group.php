<?php 
namespace Common\Entity;

/**
 * Represents `group` table
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
    /**
     * @var TABLE 
     * @OA\Property()
     */
    public $CREATE;

    /**
     * @var int(11) 
     * @OA\Property()
     */
    public $groupID;

    /**
     * @var varchar(128) 
     * @OA\Property()
     */
    public $group_name;

}
