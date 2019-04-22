<?php
include 'connection_details.php';

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, $MyDatabaseName)
or die('Error connecting to the database');

$query = 'select ID from weather_data order by id';

$result = mysqli_query($dbc, $query)
or die('Error querying the data');

mysqli_close($dbc);

//$post_data = json_encode(array('item' => $post_data), JSON_FORCE_OBJECT);
$myArray[] = null;
while ($row = mysqli_fetch_row($result)) {
    $genericObject = new stdClass();
    $genericObject->id = $row["0"];

    array_push($myArray,$genericObject);
}

echo json_encode($myArray);
?>