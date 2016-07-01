<?php namespace Intercom\Exceptions;

use Exception;

class InvalidEndpoint extends Exception
{
  protected $message = "Invalid Endpoint. Please ensure correct endpoint is set.";
}
