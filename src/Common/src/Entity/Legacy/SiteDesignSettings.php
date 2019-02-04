<?php
namespace Common\Entity\Legacy;

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

use Common\Entity\Base;

classSiteDesignSettings extends Base
{
public $ID;                  //  int(11) NOT NULL,
public $CssTypeID;           //  int(11) NOT NULL,
public $HeadContetntTypeId;  //  int(11) NOT NULL,
public $HeadContent;         //  text
}
