<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_status` (
  `SiteStatusID` int(11) NOT NULL,
  `PublishingID` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classSiteStatus extends Base
{
public $SiteStatusID;  //  int(11) NOT NULL,
public $PublishingID;  //  int(11) DEFAULT NULL,
public $Name;          //  varchar(255) DEFAULT NULL,
public $Active;        //  int(11) DEFAULT NULL,
public $DisplayOrder;  //  int(11) DEFAULT NULL
}
