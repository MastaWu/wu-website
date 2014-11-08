<?php

$artist = $_GET['artistName'];

require_once('mysqli_connect.php');

$getUpvote = mysqli_query($database_connection, "SELECT upvote FROM music WHERE artist_name = " . $artist);

$upvoteDataJson = json_encode(mysqli_fetch_assoc($getUpvote));

echo $upvoteDataJson;

?>