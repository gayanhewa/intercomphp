<?php namespace Intercom\Exceptions;

use Exception;

class CredentialsNotFound extends Exception
{
    protected $message = "Invalid Intercom Credentials";
}
