<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
 CREATE TABLE `permalink` (
  `PermalinkID` int(11) NOT NULL,
  `PermalinkTypeID` tinyint(1) DEFAULT NULL,
  `Permalink` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classPermalink extends Base
{
public $PermalinkID;
public $PermalinkTypeID;
public $Permalink;
}
