<?php namespace Intercom\Models;

use Intercom\Models\abstractRequester;

class Segments extends abstractRequester
{

  protected $signature;
  protected $url = "https://api.intercom.io/segments";

  public function __construct($signature)
  {
    $this->signature = $signature;
  }

  public function getSegments($params = array())
  {
    return $this->getRequest($this->getUrl($params));
  }

  public function createOrUpdateSegment($params = array())
  {
    return $this->postRequest($this->getUrl(), $params);
  }

  public function getSegment($params = array())
  {
    return $this->getRequest($this->getUrl()."/".$params['segment_id']);
  }

  public function deleteSegment($params = array())
  {
    return $this->deleteRequest($this->getUrl($params));
  }

}
