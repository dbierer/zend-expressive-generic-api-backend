<?php
namespace Common\Table;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `site_info` (
  `SiteInfoID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Url` varchar(255) DEFAULT NULL,
  `LogoImage` varchar(255) DEFAULT NULL,
  `GoogleAnalyticsCode` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

use Common\Entity\SiteInfo;

class SiteInfo extends Base
{
    /**
     * @return array [(string) Url]
     */
    public function getSiteUrls()
    {
        $data = [];
        $result = $this->tableGateway->select(['Url' => $siteUrl]);
        if ($result) {
            foreach ($result as $entity) {
                $data[] = $entity->Url;
            }
        }
        return $data;
    }
}
