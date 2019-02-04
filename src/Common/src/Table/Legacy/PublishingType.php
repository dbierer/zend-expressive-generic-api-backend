<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `publishing_type` (
  `PublishingTypeID` int(11) NOT NULL,
  `PublishingType` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class Publishing extends Base
{
}
