<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
 CREATE TABLE `permalink` (
  `PermalinkID` int(11) NOT NULL,
  `PermalinkTypeID` tinyint(1) DEFAULT NULL,
  `Permalink` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class Permalink extends Base
{
}
