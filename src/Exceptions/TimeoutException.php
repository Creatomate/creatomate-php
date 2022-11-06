<?php

namespace Creatomate\Exceptions;

class TimeoutException extends CreatomateException
{
    public function __construct()
    {
        parent::__construct('A timeout has occurred');
    }
}
