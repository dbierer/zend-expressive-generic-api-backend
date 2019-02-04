<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_status` (
  `SiteStatusID` int(11) NOT NULL,
  `PublishingID` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class SiteStatus extends Base
{
}
