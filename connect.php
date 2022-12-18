<?php
// Connect to the database
// $db = mysqli_connect('localhost', 'first_name', 'last_name', 'e_mail', 'phone_number', 'id_number', 'birth_day', 'gender', 'type', '	user_name' , 'password', 'photo');
$host = "localhost";
$username = "naser";
$password = "naser2022";
$dbname = "users";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
