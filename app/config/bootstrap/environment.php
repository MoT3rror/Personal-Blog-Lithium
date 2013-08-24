<?php

//setup custom environment for home to allow laptop be on development also
use lithium\core\Environment;
Environment::is(function($request) {
  switch (true) {
    case (in_array($request->env('SERVER_ADDR'), array('::1', '127.0.0.1'))):
      echo 'here';
      return 'development';
    case (in_array($request->env('REMOTE_ADDR'), array('192.168.2.2'))):
      return 'development';
    case (preg_match('/^test/', $request->env('HTTP_HOST'))):
      return 'test';
    default:
      return 'production';
    }
});

?>