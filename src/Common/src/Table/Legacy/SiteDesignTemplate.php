<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

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

class SiteDesignTemplate extends Base
{
}
