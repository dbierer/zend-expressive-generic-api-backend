<?php
namespace Common\Generic;

/**
 * Contains 2 static methods for converting between camelCaseNames to under_score_names
 */
class CamelCaseUnderScore
{
    /**
     * Converts "camel_cased_name" to "camelCasedName" to
     *
     * @param string $under_score_name
     * @return string $underScoreName where all letters following an underscore "_" are made uppercase and the underscores are removed
     */
    public static function underscoreToCamelCase($name)
    {
        $name = str_replace('_', ' ', $name);
        $name = ucwords($name);
        return str_replace(' ', '', $name);
    }
    /**
     * Converts "camelCasedName" to "camel_cased_name"
     *
     * @param string $underScoreName
     * @return string $under_score_name all lowercase, with an underscore inserted in front of where the UPPERcase letter used to be
     */
    public static function camelCaseToUnderscore($name)
    {
        $max = strlen($name);
        $newName = '';
        $switch  = [];
        for ($x = 0; $x < $max; $x++) {
            $flag = 0;
            if ($name[$x] == strtoupper($name[$x])) {
                if ($x && !$switch[$x - 1]) {
                    $newName .= '_';
                    $flag = 1;
                }
            }
            $newName .= $name[$x];
            $switch[$x] = $flag;
        }
        return strtolower($newName);
    }
}
