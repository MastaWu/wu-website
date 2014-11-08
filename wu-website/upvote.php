<?php

require_once('\mysqli_connect.php');

$upvote = mysqli_query($database_connection, "UPDATE music SET upvote = upvote + 1");

?>