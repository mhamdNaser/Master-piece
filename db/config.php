<?php

$hostName = "localhost";
$DBname = "user";
$DBuser = "root";
$UserPassword = "";

$connect_db = new mysqli($hostName,$DBuser,$UserPassword,$DBname);

// Check connection
if ($connect_db->connect_error) {
    die("Connection failed: " . $connect_db->connect_error);
}
else{
    echo "data is connect";
}

// PDO CODE ------------------------------------------------

// try {
//     // connect the database
//     $connect_db= new PDO("mysql:host=$hostName;dbname=$DBname", $DBuser, $UserPassword);

//     // message the connect is true
//     $connect_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "<h4>DataBase is Connected successfully.</h4>";
// }
// catch(PDOException $e) {

//         echo 'ERROR: ' . $e->getMessage();
//     }