<?php

require_once('mysqli_connect.php');

$id = rand(1,4);

//$artist = $_GET['artistName'];

$fileDirectory = 'http://localhost/uploadedMusic/';

//$artist = 'K Will';

$getMusic = mysqli_query($database_connection, "SELECT * FROM music WHERE id = " . $id);

$musicDataJson = json_encode(mysqli_fetch_assoc($getMusic));

echo $musicDataJson;

//while($row = mysqli_fetch_assoc($getMusic)){

//    foreach($row as $key => $value){
    
//        print "$key: $value <br />";

//    }
    
//}


?>