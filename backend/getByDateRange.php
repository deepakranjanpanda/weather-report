<?php
include 'connection_details.php';

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, $MyDatabaseName)
or die('Error connecting to the database');

$startDate =$_GET['start_date'];
$endDate = $_GET['end_date'];

$query = "SELECT * FROM `weather_data` where date BETWEEN '$startDate' and '$endDate'";

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