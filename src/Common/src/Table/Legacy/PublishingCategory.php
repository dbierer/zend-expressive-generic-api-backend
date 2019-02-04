<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `publishing_category` (
  `PublishingCategoryID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `CanDelete` tinyint(4) DEFAULT '1',
  `Image` varchar(255) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `PermalinkID` int(11) DEFAULT '0',
  `ParentCategoryID` int(10) UNSIGNED NOT NULL,
  `DisplayOrder` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class Publishing extends Base
{
}
