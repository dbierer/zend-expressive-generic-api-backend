<?php
namespace Common\Table;

/**
 * Defines methods which access this table:
 *
CREATE TABLE IF NOT EXISTS `amra_uics_motorist`.`pubtool` (
    `pubtoolID` INT NOT NULL AUTO_INCREMENT,
    `pubtool_name` VARCHAR(128) NOT NULL,
    `pubtool_enabled` tinyint(4) DEFAULT 1,
    `pubtool_permissions_tag` varchar(128) DEFAULT NULL,
    `site_site_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`pubtoolID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Common\Table\Pubtool")
*/

class Pubtool extends Base
{
    /**
     * @var Common\Table\Site
     */
    protected $siteTable;
    /**
     * Creates instance of Common\Table\Site
     * NOTE: this method is optional; if defined, the factory runs it
     *
     */
    public function init()
    {
        $this->siteTable = $this->container->get(Site::class);
    }
    /**
     * @param int $siteId
     * @return array Common\Entity\Pubtool
     */
    public function findPubtoolsBySiteId($siteID)
    {
        return $this->tableGateway->select(['site_site_id' => $siteID]);
    }
    /**
     * @param string $siteName
     * @return array Common\Entity\Pubtool
     */
    public function findPubtoolsBySiteName($siteName)
    {
        $result = [];
        $siteID = $this->siteTable->getSiteIdFromName($siteName);
        if ($siteID) {
            $result = $this->findPubtoolsBySiteId($siteID);
        }
        return $result;
    }
}
