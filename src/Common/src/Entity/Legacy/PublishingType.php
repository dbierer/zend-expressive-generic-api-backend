<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `publishing_type` (
  `PublishingTypeID` int(11) NOT NULL,
  `PublishingType` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classPublishing extends Base
{
public $PublishingTypeID;  //  int(11) NOT NULL,
public $PublishingType;    //  varchar(255) DEFAULT NULL
}
