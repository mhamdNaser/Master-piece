<?php

    require_once("./config.php");
    

try
    {
        // Taking all 5 values from the form data(input)
        $type = $_REQUEST['type'];
        $fi_name = $_REQUEST['first_name'];
        $la_name = $_REQUEST['last_name'];
        $pass = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        // insert value in special database
        if ($type == "Partner"){
            $sql = "INSERT INTO partners (id, fname, lname, password, email) VALUES ('', '$fi_name', '$la_name', '$pass', '$email')";
            $connect_db->exec($sql);
        }
        if($type == "Student"){
            $sql = "INSERT INTO students (id, fname, lname, password, email) VALUES ('', '$fi_name', '$la_name', '$pass', '$email')";
            $connect_db->exec($sql);
        }
        
    }
    catch(PDOException $e){
            echo "ERROR: Hush! Sorry. " ;
    }
        
    // Close connection
    $connect_db = null;
    echo("<a href='../index.php'>HOME</a>");