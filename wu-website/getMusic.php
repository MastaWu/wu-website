<?php

require_once('\mysqli_connect.php');

$artist = $_GET['artistName'];

$fileDirectory = 'http://localhost/sdw/uploadedMusic/';

//$artist = 'K Will';

$getMusic = mysqli_query($database_connection, "SELECT * FROM music WHERE artist_name = " . $artist);

$json = json_encode(mysqli_fetch_assoc($getMusic));

echo $json;

//while($row = mysqli_fetch_assoc($getMusic)){

//    foreach($row as $key => $value){
    
//        print "$key: $value <br />";

//    }
    
//}


?>