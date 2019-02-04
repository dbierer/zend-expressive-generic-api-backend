<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

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

class WidgetTheme extends Base
{
}
