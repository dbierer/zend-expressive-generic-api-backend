<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `publishing` (
  `PublishingID` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `ShowTitle` tinyint(3) UNSIGNED DEFAULT '0',
  `Description` text,
  `PermalinkID` int(11) DEFAULT NULL,
  `MetaTitle` varchar(255) NOT NULL,
  `MetaKeyword` text,
  `MetaDescription` text,
  `BackgroundImage` varchar(255) DEFAULT NULL,
  `Splash` tinyint(3) UNSIGNED DEFAULT NULL,
  `DisplayOrder` int(11) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `PublishedDate` datetime NOT NULL,
  `PublishingStatusID` tinyint(2) DEFAULT NULL,
  `CanDelete` tinyint(3) UNSIGNED DEFAULT '1',
  `CssTypeID` int(2) DEFAULT '1',
  `CssStyles` text,
  `PublishingLayoutTypeID` tinyint(3) UNSIGNED DEFAULT NULL,
  `PublishingTypeID` int(11) NOT NULL COMMENT 'Page = 2;',
  `TemplateID` int(10) UNSIGNED DEFAULT NULL,
  `CompletedStatus` tinyint(3) UNSIGNED DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class Publishing extends Base
{
}
