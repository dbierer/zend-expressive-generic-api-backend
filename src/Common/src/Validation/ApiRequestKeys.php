<?php
namespace Common\Validation;

/**
 * Validates API request keys:
 * site, pubtool and view
 */
use Common\Generic\Constants;

class ApiRequestKeys
{
    /**
     * Sets site, pubtool and view keys to int
     * If any key is missing, uses the defaults assigned in Constants
     *
     * @param array $params == request params
     * @param array $errors == errors (if any), passed by reference
     * @return array $params == site, pubtool and view keys to int in form of numeric array
     */
    public static function sanitizeReqKeys(array $params, array &$errors)
    {
        if (isset($params[Constants::KEY_SITE])) {
            $params[Constants::KEY_SITE] = (int) $params[Constants::KEY_SITE];
        } else {
            $params[Constants::KEY_SITE] = Constants::DEFAULT_SITE;
            $errors[Constants::KEY_SITE] = Constants::ERROR_SITE_KEY_MISSING;
        }
        if (isset($params[Constants::KEY_PUBTOOL])) {
            $params[Constants::KEY_PUBTOOL] = (int) $params[Constants::KEY_PUBTOOL];
        } else {
            $params[Constants::KEY_PUBTOOL] = Constants::DEFAULT_PUBTOOL;
            $errors[Constants::KEY_PUBTOOL] = Constants::ERROR_PUBTOOL_KEY_MISSING;
        }
        if (isset($params[Constants::KEY_VIEW])) {
            $params[Constants::KEY_VIEW] = (int) $params[Constants::KEY_VIEW];
        } else {
            $params[Constants::KEY_VIEW] = Constants::DEFAULT_VIEW;
            $errors[Constants::KEY_VIEW] = Constants::ERROR_VIEW_KEY_MISSING;
        }
        return $params;
    }
}
