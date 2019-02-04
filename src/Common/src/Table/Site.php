<?php
namespace Common\Table;

/**
 * Defines methods which access this table:
 *
CREATE TABLE `site` (
  `siteID` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(128) NOT NULL,
  `site_url` varchar(128) NOT NULL,
  `site_permissions_tag` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`siteID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8

 * @info MIGRATION NOTES: new table, new data
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Table\Site")
*/

class Site extends Base
{
    /*
     * @var array of Common\Entity\Site instances
     */
    protected $siteNames = [];
    /**
     * @return array of Common\Entity\Site instances
     */
    public function getSiteNames()
    {
        if (!$this->siteNames) {
            $this->siteNames = [];
            $result = $this->tableGateway->select();
            if ($result) {
                foreach ($result as $entity) {
                    $this->siteNames[$entity->siteID] = $entity;
                    $this->siteNames[$entity->site_name] = $entity;
                }
            }
        }
        return $this->siteNames;
    }
    /**
     * Get siteID from site name
     *
     * @param string $name
     * @return int $siteID | 0
     */
    public function getSiteIdFromName($name)
    {
        return $this->getSiteNames()[$name]->siteID ?? 0;
    }
    /**
     * Get Site Entity from site name
     *
     * @param string $name
     * @return Common\Entity\Site $site | NULL
     */
    public function findByName($name)
    {
        $result = $this->tableGateway->select(['site_name' => $name]);
        return ($result) ? $result->current() : NULL;
    }
    
    
}
