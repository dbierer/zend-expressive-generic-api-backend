<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_text_item` (
  `ID` int(11) NOT NULL,
  `Text` text,
  `WidgetItemID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

class WidgetTextItem extends Base
{
}
