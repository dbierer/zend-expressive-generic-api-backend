<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_item_type` (
  `WidgetItemTypeID` int(11) NOT NULL,
  `Type` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classWidgetItemType extends Base
{
public $WidgetItemTypeID;   //  int(11) NOT NULL,
public $Type;               // varchar(255) DEFAULT NULL
}
