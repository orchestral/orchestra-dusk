<?php

namespace Orchestra\Testbench\Dusk\Exceptions;

use Exception;
use Throwable;

class UnableToStartServer extends Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $fullMessage = "A server is already running on {$message}. Please stop it before proceeding. \n" .
            "It is likely to be a php server, so you can search your existing processes for 'php -L'. \n" .
            "Alternatively you can change the setup for your tests to use a different host and port.";

        parent::__construct($fullMessage, $code, $previous);
    }
}
