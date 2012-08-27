<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-27 15:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bench/kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-27 15:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bench/kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Applications/MAMP/htdocs/bench/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/bench/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/bench/kohana/index.php(109): Kohana_Request->execute()
#3 {main}