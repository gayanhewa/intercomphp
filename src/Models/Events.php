<?php namespace Intercom\Models;

use Intercom\Models\abstractRequester;

class Events extends abstractRequester
{

  protected $signature;
  protected $url = "https://api.intercom.io/events";

  public function __construct($signature)
  {
    $this->signature = $signature;
  }

  public function getEvents($params = array())
  {
    return $this->getRequest($this->getUrl($params));
  }

  public function createOrUpdateEvent($params = array())
  {
    return $this->postRequest($this->getUrl(), $params);
  }

  public function getEvent($params = array())
  {
    return $this->getRequest($this->getUrl()."/".$params['event_id']);
  }

  public function deleteEvent($params = array())
  {
    return $this->deleteRequest($this->getUrl($params));
  }

}
