<?php

namespace Creatomate\Exceptions;

class RateLimitExceededException extends CreatomateException
{
    public function __construct()
    {
        parent::__construct('Rate limit exceeded');
    }
}
