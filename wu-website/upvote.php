<?php

//$songName = $_GET['songName'];

$id = $_GET['id'];

require_once('mysqli_connect.php');

$upvote = mysqli_query($database_connection, "UPDATE music SET upvote = upvote + 1 WHERE id = ".$id);

?>