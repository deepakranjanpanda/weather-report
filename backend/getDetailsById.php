<?php
include 'connection_details.php';

$selectedId = $_GET['id'];
if (!is_numeric($selectedId))
throw new Exception("Preventing SQL Injection");

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, $MyDatabaseName)
or die('Error connecting to the database');

$query = 'select * from weather_data where id = '.$selectedId;

$result = mysqli_query($dbc, $query)
or die('Error querying the data');

mysqli_close($dbc);

$myArray[] = null;
$counter = 0;
while ($row = mysqli_fetch_row($result)) {
    $genericObject = new stdClass();
    $genericObject->id = $row["0"];
    $genericObject->date = $row["1"];
    $genericObject->temperature = $row["2"];
    $genericObject->humidity = $row["3"];
    $genericObject->pressure = $row["4"];

    if ($counter == 0) {
        $myArray = array($genericObject);
    } else {
        array_push($myArray, $genericObject);
    }

    $counter++;
}

echo json_encode($myArray);
?>