<?php
namespace Common\Entity\Legacy;

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

use Common\Entity\Base;

classWidgetGroup extends Base
{
public $WidgetGroupID;       //  int(11) NOT NULL,
public $Name;                //  varchar(255) DEFAULT NULL,
public $DisplayOrder;        //  int(11) DEFAULT '0',
public $WidgetGroupTypeID;   //  int(10) UNSIGNED DEFAULT NULL,
public $TemplateID;          //  int(11) DEFAULT NULL
}
