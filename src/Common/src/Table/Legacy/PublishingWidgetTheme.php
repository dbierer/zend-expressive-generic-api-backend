<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

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

class PublishingWidgetTheme extends Base
{
}
