<?php

require_once('mysqli_connect.php');

$artist = $_GET['artistName'];

$fileDirectory = 'http://localhost/uploadedMusic/';

//$artist = 'K Will';

$getMusic = mysqli_query($database_connection, "SELECT * FROM music WHERE artist_name = " . $artist);

$musicDataJson = json_encode(mysqli_fetch_assoc($getMusic));

echo $musicDataJson;

//while($row = mysqli_fetch_assoc($getMusic)){

//    foreach($row as $key => $value){
    
//        print "$key: $value <br />";

//    }
    
//}


?>