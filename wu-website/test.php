<html>

<head>

    <title>Test</title>

</head>

<body>

<?php

if (!isset($_POST['submit'])) {

// form not submitted

?>



    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    Question: <input type="text" name="question">

    Answer: <input type="text" name="answer">

    <input type="submit" name="submit">

    </form>

<?php

}

else {

// form submitted

// set server access variables

    $host = "localhost";

    $user = "root";

    $pass = "Roxanne7";

    $db = "redcap_faq";
	
    $connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
    

// get form input

    // check to make sure it's all there

    // escape input values for greater safety

    $question = empty($_POST['question']) ? die ("ERROR: Enter a country") : mysql_escape_string($_POST['question']);

    $answer = empty($_POST['answer']) ? die ("ERROR: Enter an animal") : mysql_escape_string($_POST['answer']);

    // open connection

    // select database

    mysql_select_db($db) or die ("Unable to select database!");

    

    // create query

    $query = "INSERT INTO redcap_faq (question, answer) VALUES ('$question', '$answer')";

    $query2 = "SELECT * FROM redcap_faq";

    // execute query

    $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

    $result2 = mysql_query($query2);

    $numOfRows = mysql_num_rows($result2);
    
    for($i=0; $i<$numOfRows; $i++){
    
        $result3 = mysql_result($result2, $i, 'question');
        
        $result4 = mysql_result($result2, $i, 'answer');
        
        echo "<br /> Question: " . $result3;
        
        echo "<br /> Answer: " . $result4 . "<br />";
        
    }
    
    // print message with ID of inserted record

    echo "New record inserted with ID ".mysql_insert_id();
    
    //while($row = mysqli_fetch_array($result2)) {
    //    echo $row['question'] . " " . $row['answer'];
    //    echo "<br>";
    //}

    // close connection

    mysql_close($connection);

}

?>


</body>

</html>