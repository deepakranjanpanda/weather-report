<?php

$MyUsername = "root";
$MyPassword = "root";
$MyHostname = "localhost";

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, 'datalog')
or die('Error connecting to the database');

$query = 'select * from weather_data order by id';

$result = mysqli_query($dbc, $query)
or die('Error querying the data');

mysqli_close($dbc);

//$post_data = json_encode(array('item' => $post_data), JSON_FORCE_OBJECT);
$myArray[] = null;
while ($row = mysqli_fetch_row($result)) {
    $genericObject = new stdClass();
    $genericObject->id = $row["0"];
    $genericObject->date = $row["1"];
    $genericObject->temperature = $row["2"];
    $genericObject->humidity = $row["3"];
    $genericObject->pressure = $row["4"];

    array_push($myArray,$genericObject);
}

echo json_encode($myArray);
?>