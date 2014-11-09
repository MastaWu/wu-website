<?php

//$artist = $_GET['artistName'];

$id = $_GET['id'];

require_once('mysqli_connect.php');

$getUpvote = mysqli_query($database_connection, "SELECT upvote FROM music WHERE id = " . $id);

$upvoteDataJson = json_encode(mysqli_fetch_assoc($getUpvote));

echo $upvoteDataJson;

?>