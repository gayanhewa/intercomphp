<?php namespace Intercom;

use Intercom\Exceptions\CredentialsNotFound;


class Intercom
{

  protected $api_key;
  protected $api_secret;

  public function __construct($api_key = null, $api_secret = null)
  {

    if (is_null($api_key) || is_null($api_secret)) {

        throw new CredentialsNotFound('Invalid credentials.');

    }

    $this->api_key = $api_key;
    $this->api_secret = $api_secret;

  }

  public function getSignature()
  {
    return array($this->api_key,$this->api_secret);
  }

  public function make($model)
  {

    $className = 'Intercom\Models\\'.ucwords($model);
    $m = new $className($this->getSignature());

    return $m;
  }

}
