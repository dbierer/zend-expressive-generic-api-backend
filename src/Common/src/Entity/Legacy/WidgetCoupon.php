<?php
namespace Common\Entity\Legacy;

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

use Common\Entity\Base;

classWidgetCoupon extends Base
{
public $ID;            //  int(11) NOT NULL,
public $SubTitle;      //  varchar(255) DEFAULT NULL,
public $ExpireOn;      //  date DEFAULT NULL,
public $Description;   //  text,
public $PresentedVia;  //  text,
public $Code;          //  varchar(255) DEFAULT NULL,
public $Disclaimer;    //  text,
public $WidgetID;      //  int(11) NOT NULL,
public $PermalinkID;   //  int(11) DEFAULT NULL
}
