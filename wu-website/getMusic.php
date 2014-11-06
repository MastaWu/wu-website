<?php

require_once('/mysqli_connect.php');

$musicQuery = "SELECT ";

$response = @mysqli_query($DB_NAME, $musicQuery);

if($response){

while($row = mysqli_fetch_array($response)){

    

}
    
} else {

    echo "Couldn't grab response from database.";

}

?>