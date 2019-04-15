<?php

$MyUsername = "root";
$MyPassword = "root";
$MyHostname = "localhost";

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, 'datalog');

$SQL = "INSERT INTO weather_data (temperature,humidity,pressure) VALUES ('".$_GET["temp"]."','".$_GET["hum"]."','".$_GET["pr"]."')";

// Execute SQL statement
mysqli_query($dbc, $SQL);

mysqli_close($dbc);
?>