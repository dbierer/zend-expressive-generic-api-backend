<?php
namespace View\Pages;

interface OutputInterface
{
    /**
     * Get list of current properties
     * Scan through $params (if provided)
     * Populate currently defined properties from $params
     *
     * @param array $params
     */
    public function __construct(array $params = []);
}
