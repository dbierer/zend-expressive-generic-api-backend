<?php 
namespace Common\Entity;

/**
 * Represents `user` table
 *
CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(1024) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
 *
 * @author: doug@unlikelysource.com
 * @OA\Schema(schema="Common\Entity\User")
 */

class User extends Base
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
    public $userID;

    /**
     * @var varchar(128) 
     * @OA\Property()
     */
    public $user_name;

    /**
     * @var varchar(256) 
     * @OA\Property()
     */
    public $user_email;

    /**
     * @var varchar(1024) 
     * @OA\Property()
     */
    public $user_password;

}
