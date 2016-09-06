<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

abstract class BaseController
{
    /** @var ContainerInterface */
    protected $ci;

    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }
}
