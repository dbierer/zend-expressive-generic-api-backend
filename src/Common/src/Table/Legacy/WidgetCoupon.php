<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_coupon` (
  `ID` int(11) NOT NULL,
  `SubTitle` varchar(255) DEFAULT NULL,
  `ExpireOn` date DEFAULT NULL,
  `Description` text,
  `PresentedVia` text,
  `Code` varchar(255) DEFAULT NULL,
  `Disclaimer` text,
  `WidgetID` int(11) NOT NULL,
  `PermalinkID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

class WidgetCoupon extends Base
{
}
