<?php
namespace Common\Entity\Legacy;

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

use Common\Entity\Base;

classPublishing extends Base
{
public $PublishingID;           //  int(10) UNSIGNED NOT NULL
public $Title;                  //  varchar(255) DEFAULT NULL
public $ShowTitle;              //  tinyint(3) UNSIGNED DEFAULT '0'
public $Description;            //  text
public $PermalinkID;            //  int(11) DEFAULT NULL
public $MetaTitle;              //  varchar(255) NOT NULL
public $MetaKeyword;            //  text
public $MetaDescription;        //  text
public $BackgroundImage;        //  varchar(255) DEFAULT NULL
public $Splash;                 //  tinyint(3) UNSIGNED DEFAULT NULL
public $DisplayOrder;           //  int(11) NOT NULL
public $CreatedDate;            //  datetime DEFAULT NULL
public $CreatedBy;              //  int(11) DEFAULT NULL
public $ModifiedDate;           //  datetime DEFAULT NULL
public $ModifiedBy;             //  int(11) DEFAULT NULL
public $PublishedDate;          //  datetime NOT NULL
public $PublishingStatusID;     //  tinyint(2) DEFAULT NULL
public $CanDelete;              //  tinyint(3) UNSIGNED DEFAULT '1'
public $CssTypeID;              //  int(2) DEFAULT '1'
public $CssStyles;              //  text
public $PublishingLayoutTypeID; //  tinyint(3) UNSIGNED DEFAULT NULL
public $PublishingTypeID;       //  int(11) NOT NULL COMMENT 'Page = 2;'
public $TemplateID;             //  int(10) UNSIGNED DEFAULT NULL
public $CompletedStatus;        //  tinyint(3) UNSIGNED DEFAULT '1'
}
