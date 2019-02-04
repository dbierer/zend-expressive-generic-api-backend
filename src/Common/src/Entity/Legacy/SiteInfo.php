<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_info` (
  `SiteInfoID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Url` varchar(255) DEFAULT NULL,
  `LogoImage` varchar(255) DEFAULT NULL,
  `GoogleAnalyticsCode` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classSiteInfo extends Base
{
public $SiteInfoID;             //  int(11) NOT NULL,
public $Name;                   //  varchar(255) DEFAULT NULL,
public $Url;                    //  varchar(255) DEFAULT NULL,
public $LogoImage;              //  varchar(255) DEFAULT NULL,
public $GoogleAnalyticsCode;    //  text
}
