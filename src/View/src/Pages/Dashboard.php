<?php
namespace View\Pages;

/**
 * Value object class representing output to API dashboard call
 */
class Dashboard extends Base
{
    /**
     * List of websites and API links to dashboard data to those sites
     * (e.g. amra.org, uics.org, motorist.org)
     * @var array of Pages\Output\Site objects
     */
    public $sites;
    /**
     * List of business tools + API links to dashboard data for those tools
     * (e.g. Activities, Members, Settings, Media Library)
     * @var array of Pages\Output\BizTool objects
     */
    public $bizTools;
    /**
     * List of publishing tools + API links to dashboard data for those tools for a given site
     * (e.g. PAGES, COMPONENTS, GLOSSARY)
     * @var array of Pages\Output\PubTool objects
     */
    public $pubTools;
    /**
     * Contents: varies depending on site + business tool + publishing tool
     * Example: array of Pages\Output\Pages\DashContent objects
     * @var mixed
     */
    public $content;
}
