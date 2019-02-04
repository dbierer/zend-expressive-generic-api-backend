<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_theme` (
  `ThemeID` int(11) NOT NULL,
  `ThemeName` varchar(255) DEFAULT NULL,
  `ThemeCssFile` varchar(250) DEFAULT NULL,
  `WidgetTypeID` int(11) DEFAULT NULL COMMENT 'Image=1, Embed=2,  Publishing=3, Feed=4',
  `WidgetSubTypeName` varchar(255) DEFAULT NULL COMMENT 'Mainly for feed',
  `WidgetSubTypeID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classWidgetTheme extends Base
{
public $ThemeID;             //  int(11) NOT NULL,
public $ThemeName;           //  varchar(255) DEFAULT NULL,
public $ThemeCssFile;        //  varchar(250) DEFAULT NULL,
public $WidgetTypeID;        //  int(11) DEFAULT NULL COMMENT 'Image=1, Embed=2,  Publishing=3, Feed=4',
public $WidgetSubTypeName;   //  varchar(255) DEFAULT NULL COMMENT 'Mainly for feed',
public $WidgetSubTypeID;     //  int(11) DEFAULT NULL
}
