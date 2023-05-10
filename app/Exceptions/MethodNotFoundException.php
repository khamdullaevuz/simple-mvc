<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class MethodNotFoundException extends Exception
{
    public function __construct(string $message = "Method not found", int $code = 404, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}