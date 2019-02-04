<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_text_item` (
  `ID` int(11) NOT NULL,
  `Text` text,
  `WidgetItemID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classWidgetTextItem extends Base
{
public $ID;             //  int(11) NOT NULL,
public $Text;           //  text,
public $WidgetItemID;   //  int(11) DEFAULT NULL
}
