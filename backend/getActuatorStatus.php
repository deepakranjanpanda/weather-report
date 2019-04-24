<?php

include 'connection_details.php';

$dbc = mysqli_connect($MyHostname, $MyUsername, $MyPassword, $MyDatabaseName)
    or die('Error creating connection');


$query = 'select * from acutor_status where status=1';

$result = mysqli_query($dbc, $query)
    or die('Error executing query');

$genericObject = new stdClass();
$genericObject->status = "0";

while ($row = mysqli_fetch_row($result)) {
    $genericObject->status = "1";
}

echo json_encode($genericObject);
?>
