<?php
namespace Common\Entity;

use Common\Generic\Constants;

/**
 * @property Common\Entity\EntityInterface
 * @author doug@unlikelysource.com
 * 
 * @OA\Schema(schema="Common\Entity\Base")
 */
class Base implements EntityInterface
{
    /**
     * name of the ID column
     * @var string $idCol
     * @OA\Property(property="idCol",type="string",description="name of the ID column")     
     */
    protected $idCol = null;
    /**
     * Get list of current properties
     * Scan through $params (if provided)
     * Populate currently defined properties from $params
     *
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        $vars = get_object_vars($this);
        if ($params) {
            foreach ($vars as $key => $value) {
                if (isset($params[$key])) {
                    $this->$key = $value;
                }
            }
        }
    }
    /**
     * Used to determine which is the ID column (i.e. the primary key)
     * Assumes there is a property "xxxID"
     * If this is not the case, you will need to override this method in the specific entity class which does not follow this logic
     *
     * @return string $idCol == name of the ID column
     */
    public function getIdColumn() : string
    {
        if (!$this->idCol) {
            $cols = get_object_vars($this);
            foreach ($cols as $key => $value) {
                if (strpos($key, 'ID')) {
                    $this->idCol = $key;
                    break;
                }
            }
        }
        if (!$this->idCol) {
            throw new Exception(Constants::ERROR_ID_COL);
        }
        return $this->idCol;
    }
}
