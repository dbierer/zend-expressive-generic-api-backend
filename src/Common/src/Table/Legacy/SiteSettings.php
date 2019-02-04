<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_settings` (
  `SiteSettingsID` int(11) NOT NULL,
  `SettignsKey` varchar(255) DEFAULT NULL,
  `SettingsValue` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class SiteSettings extends Base
{
}
