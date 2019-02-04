<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_menu_item` (
  `MenuItemID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL,
  `PublishingTypeID` int(11) DEFAULT '0' COMMENT 'Page, article, event typeID',
  `PublishingID` int(11) DEFAULT NULL,
  `PermalinkID` int(11) DEFAULT NULL,
  `NewWindow` int(11) DEFAULT NULL,
  `BannedPrivilegeIDs` int(11) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT '0',
  `ParentMenuItemID` int(11) NOT NULL DEFAULT '0',
  `MenuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classWidgetMenuItem extends Base
{
public $MenuItemID;          //  int(11) NOT NULL,
public $Name;                //  varchar(255) DEFAULT NULL,
public $Link;                //  varchar(255) DEFAULT NULL,
public $PublishingTypeID;    //  int(11) DEFAULT '0' COMMENT 'Page, article, event typeID',
public $PublishingID;        //  int(11) DEFAULT NULL,
public $PermalinkID;         //  int(11) DEFAULT NULL,
public $NewWindow;           //  int(11) DEFAULT NULL,
public $BannedPrivilegeIDs;  //  int(11) DEFAULT NULL,
public $DisplayOrder;        //  int(11) DEFAULT '0',
public $ParentMenuItemID;    //  int(11) NOT NULL DEFAULT '0',
public $MenuID;              //  int(11) NOT NULL
}
