<?php namespace Intercom\Models;

use Intercom\Models\abstractRequester;

class BulkUsers extends abstractRequester
{

  protected $signature;
  protected $url = "https://api.intercom.io/bulk/users";

  public function __construct($signature)
  {
    $this->signature = $signature;
  }

  public function createOrUpdateUsers($params = array())
  {
    return $this->postRequest($this->getUrl(), $params);
  }

  public function deleteUsers($params = array())
  {
    return $this->deleteRequest($this->getUrl($params));
  }

}
