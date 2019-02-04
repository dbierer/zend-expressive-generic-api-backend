<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget` (
  `WidgetID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `ShowName` tinyint(1) UNSIGNED DEFAULT '0',
  `Status` smallint(5) UNSIGNED DEFAULT '1',
  `Deleted` int(11) DEFAULT '0',
  `DisplayOrder` int(10) UNSIGNED DEFAULT '0',
  `DisplayColumn` smallint(2) UNSIGNED DEFAULT '0',
  `DuplicateWidgetID` int(11) DEFAULT NULL,
  `WidgetGroupID` int(10) UNSIGNED DEFAULT NULL,
  `WidgetTypeID` smallint(2) UNSIGNED DEFAULT NULL,
  `BehaviorID` int(10) UNSIGNED DEFAULT '1',
  `ShowInterval` int(10) UNSIGNED DEFAULT '5',
  `DisplayOrderType` int(11) DEFAULT NULL,
  `CssTypeID` smallint(6) DEFAULT NULL,
  `HeaderTypeID` smallint(6) DEFAULT NULL,
  `HeaderContent` text,
  `ThemeID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classWidget extends Base
{
public $WidgetID;          //  int(11) NOT NULL,
public $Name;              //  varchar(255) DEFAULT NULL,
public $ShowName;          //  tinyint(1) UNSIGNED DEFAULT '0',
public $Status;            //  smallint(5) UNSIGNED DEFAULT '1',
public $Deleted;           //  int(11) DEFAULT '0',
public $DisplayOrder;      //  int(10) UNSIGNED DEFAULT '0',
public $DisplayColumn;     //  smallint(2) UNSIGNED DEFAULT '0',
public $DuplicateWidgetID; //  int(11) DEFAULT NULL,
public $WidgetGroupID;     //  int(10) UNSIGNED DEFAULT NULL,
public $WidgetTypeID;      //  smallint(2) UNSIGNED DEFAULT NULL,
public $BehaviorID;        //  int(10) UNSIGNED DEFAULT '1',
public $ShowInterval;      //  int(10) UNSIGNED DEFAULT '5',
public $DisplayOrderType;  //  int(11) DEFAULT NULL,
public $CssTypeID;         //  smallint(6) DEFAULT NULL,
public $HeaderTypeID;      //  smallint(6) DEFAULT NULL,
public $HeaderContent;     //  text,
public $ThemeID;           //  int(11) NOT NULL
}
