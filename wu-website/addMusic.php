<?php

if(!empty($_POST['submit'])){

    echo "during";
    
    $songName_php = $_POST['songName'];
    $albumName_php = $_POST['albumName'];
    $artistName_php = $_POST['artistName'];
    $musicFile_php = $_FILES['musicFile']['name'];
    $target_file = 'uploadedMusic/' . basename($_FILES['musicFile']['name']);
    $source_file = $_FILES['musicFile']['tmp_name'];
    
    if(file_exists($target_file)){
        
        echo "Sorry, this file already exists";
        
    } else {
        
        if(move_uploaded_file($source_file, $target_file)){
            
            echo "It has been uploaded";
            
        } else {
            
            echo "Upload failed";
            
        }
        
    }
    
    require_once('\mysqli_connect.php');

    echo $songName_php . " " . $albumName_php . " " . $artistName_php;
    
    $addMusicQuery = mysqli_query($database_connection, "INSERT INTO music (song_Name, music_Upload, album_Name, artist_Name) VALUES ('$songName_php', '$musicFile_php', '$albumName_php', '$artistName_php')");

}

?>