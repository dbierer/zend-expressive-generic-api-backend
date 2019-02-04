<?php
namespace View;

/**
 * Returns service container "services" definitions
 */
return [
    // site-pubtool-view
    'view' => [
        // site-pubtool-view
        'unlikely-list-list' => [
            // this is the SQL needed to produce desired results for this combo of site, pubtool and view
            'sql' => '-- SQL Statement Goes Here --',
            // the query results are fed into this funciton, which then returns JSON according to the template
            'function' => function ($results) {},
            // this is the JSON template; the values with periods represent database table.column expressions
            'template' => '{
                "sites" : [{"name" : "site.name", "link" : ""}],
                "pubtools" : [{"pubtool" : "pubtool.name", "link" : ""}],
                "contents" : ["#" : {"title":"contents.title","createDate":"contents.date_created","editLink":""}]
            }',
        ],
    ],
];
