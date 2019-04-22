<?php
include 'connection_details.php';

$id = $_POST['id'];
$temp = $_POST['temp'];
$pressure = $_POST['pres'];
$humidity =  $_POST['hum'];

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, $MyDatabaseName)
or die('Error connecting to the database');

$query = "UPDATE `weather_data` SET `temperature` = '$temp', `humidity` = '$humidity', `pressure` = '$pressure' WHERE `weather_data`.`id` = $id";

$result = mysqli_query($dbc, $query)
or die('Error querying the data');

mysqli_close($dbc);

header("Location: ../edit.html");
?>