<?php

if(!empty($_POST['submit'])){
    
    $songName_php = $_POST['songName'];
    $albumName_php = $_POST['albumName'];
    $artistName_php = $_POST['artistName'];
    $musicFile_php = $_FILES['musicFile']['name'];
    $target_file = 'uploadedMusic/' . basename($_FILES['musicFile']['name']);
    $source_file = $_FILES['musicFile']['tmp_name'];
    
    if(file_exists($target_file)){
        
        echo "Sorry, this file already exists. <br />";
        
    } else {
        
        if(move_uploaded_file($source_file, $target_file)){
            
            echo "Your file " . $musicFile_php ." has been uploaded <br />";
            
        } else {
            
            echo "Upload failed <br />";
            
        }
        
    }
    
    echo "Song Name: " . $songName_php . "<br />" . "Album Name: " . $albumName_php . "<br />" . "Artist Name: " . $artistName_php . "<br />" . "Name of Music File: " . $musicFile_php; 
    
    require_once('mysqli_connect.php');
    
    if ($database_connection) {
        echo "Connected";
    }
    
    $addMusicQuery = mysqli_query($database_connection, "INSERT INTO music (song_Name, music_Upload, album_Name, artist_Name, upvote, downvote) VALUES ('$songName_php', '$musicFile_php', '$albumName_php', '$artistName_php', 1, 1)");
    
}

?>