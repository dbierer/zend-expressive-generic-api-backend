<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_settings` (
  `SiteSettingsID` int(11) NOT NULL,
  `SettignsKey` varchar(255) DEFAULT NULL,
  `SettingsValue` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classSiteSettings extends Base
{
public $SiteSettingsID;     //  int(11) NOT NULL,
public $SettignsKey;        //  varchar(255) DEFAULT NULL,
public $SettingsValue;      //  varchar(255) DEFAULT NULL
}
