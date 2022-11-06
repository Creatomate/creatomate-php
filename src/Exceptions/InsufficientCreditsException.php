<?php

namespace Creatomate\Exceptions;

class InsufficientCreditsException extends CreatomateException
{
    public function __construct()
    {
        parent::__construct('Insufficient credits');
    }
}
