<?php
$MyUsername = "";  // enter your username for mysql
$MyPassword = "";  // enter your password for mysql
$MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysqli_connect($MyHostname, $MyUsername, $MyPassword);
$selected = mysqli_select_db(datalog,$dbh); //Enter your database name here 
?>