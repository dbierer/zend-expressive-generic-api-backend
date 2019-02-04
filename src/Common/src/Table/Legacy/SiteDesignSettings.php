<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_design_settings` (
  `ID` int(11) NOT NULL,
  `CssTypeID` int(11) NOT NULL,
  `HeadContetntTypeId` int(11) NOT NULL,
  `HeadContent` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

class SiteDesignSettings extends Base
{
}
