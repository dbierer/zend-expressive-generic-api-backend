<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `publishing_widget_theme` (
  `ThemeID` int(11) NOT NULL,
  `ThemeName` varchar(255) DEFAULT NULL,
  `ThemeCssFile` varchar(250) DEFAULT NULL,
  `PublishingWidgetTypeID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classPublishingWidgetTheme extends Base
{
public $ThemeID;                 //  int(11) NOT NULL,
public $ThemeName;               //  varchar(255) DEFAULT NULL,
public $ThemeCssFile;            //  varchar(250) DEFAULT NULL,
public $PublishingWidgetTypeID;  // int(10) UNSIGNED NOT NULL,
}
