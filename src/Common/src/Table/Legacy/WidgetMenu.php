<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_menu` (
  `MenuID` int(11) NOT NULL,
  `StyleTypeID` int(11) NOT NULL COMMENT 'Dropdown =1, list=2',
  `FormatTypeID` int(11) NOT NULL COMMENT 'horizontal =1, vertical=2',
  `WidgetID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

class WidgetMenu extends Base
{
}
