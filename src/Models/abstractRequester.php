<?php namespace Intercom\Models;

use Requests;
use Requests_Auth_Basic;
use Intercom\Exceptions\InvalidEndpoint;

abstract class abstractRequester
{
    public function getUrl($params = array())
    {

      if ($this->url == "") {
            throw new InvalidEndpoint();
      }

      if (count($params) > 0) {
        $this->url = $this->url . '?'. http_build_query($params);
      }
    
      return $this->url;
    }

    public function getRequest($url)
    {

        $headers = array('Accept' => 'application/json', 'content-type' => 'application/json');
        $options = array('auth' => new Requests_Auth_Basic($this->signature));
        $res = Requests::get($url, $headers, $options);

        return json_decode($res->body, true);
    }

    public function postRequest($url, $params = null)
    {

        $headers = array('Accept' => 'application/json', 'content-type' => 'application/json');
        $options = array('auth' => new Requests_Auth_Basic($this->signature));
        $res = Requests::post($url, $headers, json_encode($params), $options);

        return json_decode($res->body, true);
    }

    public function deleteRequest($url)
    {

        $headers = array('Accept' => 'application/json');
        $options = array('auth' => new Requests_Auth_Basic($this->signature));
        $res = Requests::delete($url, $headers, $options);

        return json_decode($res->body, true);
    }
}
