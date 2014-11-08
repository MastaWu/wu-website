<?php

define ('DB_USERNAME', 'stephgv0_music');
define ('DB_PASSWORD', 'iloveRoxann#7');
define ('DB_HOST', 'stephen-wu.com');
define ('DB_NAME', 'stephgv0_testdb');

$database_connection = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or 
    die('Your connection has failed. ' . mysqli_connect_error());



?>