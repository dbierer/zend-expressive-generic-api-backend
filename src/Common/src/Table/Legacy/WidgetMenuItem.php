<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

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

class WidgetMenuItem extends Base
{
}
