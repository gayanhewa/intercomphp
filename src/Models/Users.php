<?php namespace Intercom\Models;

use Intercom\Models\abstractRequester;

class Users extends abstractRequester
{

  protected $signature;
  protected $url = "https://api.intercom.io/users";

  public function __construct($signature)
  {
    $this->signature = $signature;
  }

  public function getUsers($params = array())
  {
    return $this->getRequest($this->getUrl($params));
  }

  public function createOrUpdateUser($params = array())
  {
    return $this->postRequest($this->getUrl(), $params);
  }

  public function getUser($params = array())
  {
    return $this->getRequest($this->getUrl()."/".$params['user_id']);
  }

  public function deleteUser($params = array())
  {
    return $this->deleteRequest($this->getUrl($params));
  }

}
