<?php namespace Intercom\Models;

use Intercom\Models\abstractRequester;

class BulkEvents extends abstractRequester
{

  protected $signature;
  protected $url = "https://api.intercom.io/bulk/events";

  public function __construct($signature)
  {
    $this->signature = $signature;
  }

  public function createEvents($params = array())
  {
    return $this->postRequest($this->getUrl(), $params);
  }

}
