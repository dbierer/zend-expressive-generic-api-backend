<?php
namespace Common\Adapter;
use Zend\Db\Adapter\Adapter;

/**
 * Extends Zend\Db\Adapter\Adapter
 * Using a separate class in case we need to add something later
 * 
 * @author doug@unlikelysource.com
 * 
 * @OA\Schema(schema="Common\Adapter\CommonAdapter")
 */
class CommonAdapter extends Adapter
{
}
