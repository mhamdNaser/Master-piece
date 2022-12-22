<?php

    require_once("db/config.php");

    $type = $_REQUEST['type'];
    $fi_name = $_REQUEST['first_name'];
    $la_name = $_REQUEST['last_name'];
    $pass = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    if ($connect_db->query($sql) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($type == "Student"){
            $connect_db = "INSERT INTO student ('st_id','st_fname','st_lname','st_password','st_email') VALUES ('0', $fi_name, $la_name, $pass, $email)";
            require_once("./index.php");
        }
        elseif($type == "Partner"){
            $connect_db = "INSERT INTO student ('st_id','st_fname','st_lname','st_password','st_email') VALUE ('0', $fi_name, $la_name, $pass, $email)";
            require_once("./index.php");
        }
        else{
            echo "ERROR", mysqli_connect_error();
        }

    }

    