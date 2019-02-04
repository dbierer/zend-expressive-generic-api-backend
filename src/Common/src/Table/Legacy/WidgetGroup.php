<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_group` (
  `WidgetGroupID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT '0',
  `WidgetGroupTypeID` int(10) UNSIGNED DEFAULT NULL,
  `TemplateID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class WidgetGroup extends Base
{
}
