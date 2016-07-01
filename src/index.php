<?php

require '../vendor/autoload.php';

use Intercom\Intercom;

try{

  $intercom = new Intercom(getenv("KEY"), getenv("SEC"));

  // $user = $intercom->make('users');

  // var_dump($user->getUsers(array('per_page' => 2)));
  // var_dump($user->getUser(array('user_id' => '5774687cf2bb9a61a600144b')));
  
}catch(Exception $e) {
  var_dump($e);die;
}
