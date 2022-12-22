<?php

$hostName = "localhost";
$DBname = "users";
$DBuser = "root";
$UserPassword = '';

$connection_DB = mysqli_connect($hostName,$DBuser,$UserPassword,$DBname);

// Check connection
if (!$connection_DB) {
    echo("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";