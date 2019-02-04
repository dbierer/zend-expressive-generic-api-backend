<?php
namespace Common\Entity\Legacy;

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

use Common\Entity\Base;

classPublishing extends Base
{
public $PublishingCategoryID;  //  int(11) NOT NULL,
public $Name;                  //  varchar(255) DEFAULT NULL,
public $CanDelete;             //  tinyint(4) DEFAULT '1',
public $Image;                 //  varchar(255) DEFAULT NULL,
public $Type;                  //  varchar(45) DEFAULT NULL,
public $PermalinkID;           //  int(11) DEFAULT '0',
public $ParentCategoryID;      //  int(10) UNSIGNED NOT NULL,
public $DisplayOrder;          //  int(10) UNSIGNED NOT NULL
}
