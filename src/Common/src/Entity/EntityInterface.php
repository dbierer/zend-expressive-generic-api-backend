<?php
namespace Common\Entity;

/**
 * @OA\Schema(schema="Common\Entity\EntityInterface")
 */
interface EntityInterface
{
    /**
     * If parameters supplied, populates the entity instance based on existing properties only
     *
     * @param array $params
     */
    public function __construct(array $params = []);
    /**
     * Used to determine which is the ID column (i.e. the primary key)
     * Assumes there is a property "xxxID"
     * If this is not the case, you will need to override this method in the specific entity class which does not follow this logic
     *
     * @return string $idCol == name of the ID column
     */
    public function getIdColumn();
}
