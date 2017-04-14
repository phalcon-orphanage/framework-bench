<?php

ini_set('display_errors', 0);

require_once __DIR__.'/vendor/lib/limonade.php';

dispatch('/', 'hello');
  function hello()
  {
      return 'Hello World!';
  }
run();


