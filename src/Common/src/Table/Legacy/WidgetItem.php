<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_item` (
  `WidgetItemID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL,
  `OpenNewWindow` tinyint(3) UNSIGNED DEFAULT '0',
  `WidgetContent` text,
  `Caption` text,
  `WidgetContentType` int(10) UNSIGNED DEFAULT '1' COMMENT 'Image = 1; ImageCode =2; PublishingPage = 1;',
  `DisplayOrder` int(11) DEFAULT '0',
  `ViewCount` int(11) DEFAULT '0',
  `Image` varchar(255) DEFAULT NULL,
  `WidgetItemTypeID` int(11) DEFAULT NULL COMMENT 'Image Only = 1;  Image with Link = 2;  Image with Popout = 3;, publishingWidget = 2',
  `WidgetID` int(11) DEFAULT NULL,
  `ParentWidgetItemID` int(10) UNSIGNED DEFAULT NULL,
  `CssTypeID` tinyint(3) DEFAULT NULL,
  `HeaderTypeID` tinyint(3) DEFAULT NULL,
  `HeaderContent` varchar(255) DEFAULT NULL,
  `ThemeID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class WidgetItem extends Base
{
}
