<?php
namespace Common\Entity\Legacy;

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

use Common\Entity\Base;

classWidgetMenu extends Base
{
public $MenuID;        //  int(11) NOT NULL,
public $StyleTypeID;   //  int(11) NOT NULL COMMENT 'Dropdown =1, list=2',
public $FormatTypeID;  //  int(11) NOT NULL COMMENT 'horizontal =1, vertical=2',
public $WidgetID;      //  int(11) NOT NULL
}
