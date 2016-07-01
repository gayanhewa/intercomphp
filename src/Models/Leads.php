<?php namespace Intercom\Models;

use Intercom\Models\abstractRequester;

class Leads extends abstractRequester
{

  protected $signature;
  protected $url = "https://api.intercom.io/contacts";

  public function __construct($signature)
  {
    $this->signature = $signature;
  }

  public function getLeads($params = array())
  {
    return $this->getRequest($this->getUrl($params));
  }

  public function createOrUpdateLead($params = array())
  {
    return $this->postRequest($this->getUrl(), $params);
  }

  public function getLead($params = array())
  {
    return $this->getRequest($this->getUrl()."/".$params['lead_id']);
  }

  public function deleteLead($params = array())
  {
    return $this->deleteRequest($this->getUrl($params));
  }

}
