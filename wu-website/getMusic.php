<?php

require_once('mysqli_connect.php');

$id = rand(1,5);

$artist = $_GET['artistName'];

$fileDirectory = 'http://localhost/uploadedMusic/';

//$artist = 'K Will';
if(isset($artist)){

    $getMusic = mysqli_query($database_connection, "SELECT * FROM music WHERE artist_Name = " . $artist );

} else {

    $getMusic = mysqli_query($database_connection, "SELECT * FROM music WHERE id = " . $id );

}

//$getMusic = mysqli_query($database_connection, "SELECT * FROM music WHERE id = " . $id );

$musicDataJson = json_encode(mysqli_fetch_assoc($getMusic));

echo $musicDataJson;

//while($row = mysqli_fetch_assoc($getMusic)){

//    foreach($row as $key => $value){
    
//        print "$key: $value <br />";

//    }
    
//}


?>