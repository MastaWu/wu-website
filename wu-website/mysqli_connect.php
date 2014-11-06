<?php

define ('DB_USERNAME', 'musicUpload');
define ('DB_PASSWORD', 'password');
define ('DB_HOST', 'localhost');
define ('DB_NAME', testdb2);

$database_connection = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or 
    die('Your connection has failed. ' . mysqli_connect_error());



?>