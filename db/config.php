<?php

$hostName = "localhost";
$DBname = "users1";
$DBuser = "root";
$UserPassword = '';

$connection_DB = mysqli_connect($hostName,$DBuser,$UserPassword,$DBname);

// // check connection 
// if(!$connection_DB){
//     echo("CONNECTION ERROR" . mysqli_connect_error());
// }
// else{
//     echo("DataBase IS Connected");
// }

try {
    $connection_DB= new PDO("mysql:host=$hostName;dbname=$DBname", $DBuser, $UserPassword);
    $connection_DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h4>DataBase is Connected successfully.</h4>";

    } catch(PDOException $e) {

        echo 'ERROR: ' . $e->getMessage();
    }