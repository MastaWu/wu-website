<?php

require_once('mysqli_connect.php');

$mysqli = new mysqli($database_connection);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$result = $mysqli->query("SELECT song_Name, upvote FROM music ORDER BY upvote DESC LIMIT 5");

  $rows = array();
  $table = array();
  $table['cols'] = array(

    // Labels for your chart, these represent the column titles.
    /* 
        note that one column is in "string" format and another one is in "number" format 
        as pie chart only required "numbers" for calculating percentage 
        and string will be used for Slice title
    */

    array('label' => 'song_Name', 'type' => 'string'),
    array('label' => 'upvote', 'type' => 'number')

);
  
   /* Extract the information from $result */
  while($r = mysql_fetch_assoc($query)) {
      $temp = array();
      $temp[] = array('v' => $r['song_Name']);
      $temp[] = array('v' => (int) $r['upvote']);


      $rows[] = array('c' => $temp);
  }

  $table['rows'] = $rows;

// convert data into JSON format
$jsonTable = json_encode($table);
echo $jsonTable;

//$trending = mysqli_query($database_connection, "SELECT song_Name, upvote FROM music ORDER BY upvote DESC LIMIT 5");

//$output = mysqli_fetch_assoc($trending);

//while ($array = mysql_fetch_array($trending)) {
//    print_r($array);
//}

//print_r ($response[]);

//return json_encode($response);

//while($row = mysqli_fetch_assoc($trending)){
//    echo json_encode($row);
//}

//$trendingJson = json_encode($results);

//echo $trendingJson;

//while($r = mysqli_fetch_assoc($trending)) {
//    $arr2=['song_Name']($r);
//    $arr1=['upvote']($r);
//}

//for($i=0;$i<count($arr1);$i++)
//{
//    $chart_array[$i]=array((string)$arr2[$i],intval($arr1[$i]));
//}
//echo "<pre>";
//$data=json_encode($chart_array);

//echo $data;

?>