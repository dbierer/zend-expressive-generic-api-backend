<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `permalinktype` (
  `PermalinkTypeID` int(10) UNSIGNED NOT NULL,
  `PermalinkType` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classPermalinkType extends Base
{
public $PermalinkTypeID;
public $PermalinkType;
}
