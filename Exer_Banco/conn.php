<?php
// database  = banco de dados / host = hospedagem / local / ip / dns
$databaseHost = '127.0.0.1';
$databaseName = 'AULA';
$databaseUsername = 'root';
$databasePassword = 't3dnpoa4';

// Open a new connection to the MySQL server
// mysqli
// mysql php data object
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
