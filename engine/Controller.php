<?php

namespace Engine;

use Engine\DI\DI;

abstract class Controller
{
    /**
     * @var \Engine\DI\DI
     */
    protected $di;

    protected $db;

    /**
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;

    }
}