<?php

const SERVER = "localhost";
const DBNAME = "users";
const USER = "root";
const PASS = "";


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