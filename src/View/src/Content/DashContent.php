<?php
namespace Pages\Ouput\Pages;

/**
 * Contains dashboard content for Pages publishing tool
 */
class DashContent
{
    /**
     * @var string
     */
    public $pageName;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusLink;
    /**
     * @var array of links to API calls for view, edit and remove
     */
    public $editingLinks;
}
