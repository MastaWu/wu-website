<?php



if(isset($_REQUEST['submit'])){

    $songName_php = $_REQUEST('songName');
    $albumName_php = $_REQUEST('albumName');
    $bandName_php = $_REQUEST('bandName');
    $musicFile_php = $_FILES['musicFile']['songName'];

    
    
    require_once('/mysqli_connect.php');

    echo $songName_php . " " . $albumName_php . " " . $bandName_php;
   
    $addMusicQuery = mysql_query("INSERT INTO music (song_Name, music_Upload, album_Name, artist_Name) VALUES ('$songName_php', '$musicFile_php', '$albumName_php', '$bandName_php')");

};

?>