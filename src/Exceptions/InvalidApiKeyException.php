<?php

namespace Creatomate\Exceptions;

class InvalidApiKeyException extends CreatomateException
{
    public function __construct()
    {
        parent::__construct('Invalid Creatomate API key provided');
    }
}
