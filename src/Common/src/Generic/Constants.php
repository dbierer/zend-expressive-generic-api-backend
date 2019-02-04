<?php
namespace Common\Generic;

/**
 * Defines constants such as request param keys, defaults, route keys, common error messages
 * 
 * @author: doug@unlikelysource.com
 * @OA\Schema(schema="Common\Generic\Constants")
 */
class Constants
{
    // common namespaces
    const COMMON_ENTITY_NAMESPACE = 'Common\\Entity\\';
    const COMMON_TABLE_NAMESPACE  = 'Common\\Table\\';

    // request parameter keys
    const KEY_RESPONSE_ERROR      = 'error';
    const KEY_SITE                = 'site';
    const KEY_PUBTOOL             = 'pubtool';
    const KEY_VIEW                = 'view';
    const KEY_SITE_LIST           = 'site_list';
    const KEY_PUBTOOL_LIST        = 'pubtool_list';

    // defaults
    const DEFAULT_SITE            = 'uics';
    const DEFAULT_PUBTOOL         = 'PAGES';
    const DEFAULT_VIEW            = 'home';

    // common errors
    const ERROR_SITE_KEY_MISSING     = 'ERROR: site key is missing or invalid';
    const ERROR_PUBTOOL_KEY_MISSING  = 'ERROR: pubtool key is missing or invalid';
    const ERROR_VIEW_KEY_MISSING     = 'ERROR: view key is missing or invalid';
    const ERROR_SITE_LOOKUP          = 'ERROR: unable to locate this site';
    const ERROR_PUBTOOL_LOOKUP       = 'ERROR: unable to locate this pubtool';
    const ERROR_VIEW_LOOKUP          = 'ERROR: unable to locate this view';
    const ERROR_ID_COL               = 'ERROR: ID column not found';

    // default base routes
    const ROUTE_ADMIN   = '/api/admin';
    const ROUTE_VIEW    = '/api/view';
}
