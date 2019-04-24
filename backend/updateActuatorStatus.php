<?php
include 'connection_details.php';

$status = $_GET['status'];

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, $MyDatabaseName)
or die('Error creating connection');


$query = "update acutor_status set status = $status";

echo $query;

mysqli_query($dbc, $query)
or die('Error executing query');


?>