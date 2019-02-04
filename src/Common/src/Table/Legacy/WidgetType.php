<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_type` (
  `WidgetTypeID` int(11) NOT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `WidgetTypeName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class WidgetType extends Base
{
}
