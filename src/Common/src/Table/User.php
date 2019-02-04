<?php 
namespace Common\Table;

/**
 * Defines methods which access this table:
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
}
