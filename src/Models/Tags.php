<?php namespace Intercom\Models;

use Intercom\Models\abstractRequester;

class Tags extends abstractRequester
{

  protected $signature;
  protected $url = "https://api.intercom.io/tags";

  public function __construct($signature)
  {
    $this->signature = $signature;
  }

  public function getTags($params = array())
  {
    return $this->getRequest($this->getUrl($params));
  }

  public function createOrUpdateTag($params = array())
  {
    return $this->postRequest($this->getUrl(), $params);
  }

  public function getTag($params = array())
  {
    return $this->getRequest($this->getUrl()."/".$params['tag_id']);
  }

  public function deleteTag($params = array())
  {
    return $this->deleteRequest($this->getUrl($params));
  }

}
