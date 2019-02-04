<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_design_template` (
  `TemplateID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `CssTypeID` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `CssStyles` text,
  `HeadContentTypeID` int(11) DEFAULT NULL,
  `HeadContent` text,
  `CanDelete` tinyint(3) UNSIGNED DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classSiteDesignTemplate extends Base
{
public $TemplateID;            //  int(11) NOT NULL,
public $Name;                  //  varchar(255) DEFAULT NULL,
public $CssTypeID;             //  int(10) UNSIGNED NOT NULL DEFAULT '3',
public $CssStyles;             //  text,
public $HeadContentTypeID;     //  int(11) DEFAULT NULL,
public $HeadContent;           //  text,
public $CanDelete;             //  tinyint(3) UNSIGNED DEFAULT '0'
}
