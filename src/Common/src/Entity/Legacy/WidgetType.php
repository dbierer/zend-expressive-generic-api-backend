<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_type` (
  `WidgetTypeID` int(11) NOT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `WidgetTypeName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classWidgetType extends Base
{
public $WidgetTypeID;     //  int(11) DEFAULT NULL COMMENT 'Image=1, Embed=2,  Publishing=3, Feed=4',
public $Type;             //  varchar(255) DEFAULT NULL,
public $WidgetTypeName;   //  varchar(255) DEFAULT NULL COMMENT 'Mainly for feed',
}
