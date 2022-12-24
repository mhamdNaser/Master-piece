<?php

    require_once("./config.php");
    

try
    {
        // Taking all 5 values from the form data(input)
        $fi_name = $_REQUEST['first_name'];
        $la_name = $_REQUEST['last_name'];
        $pass = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        // insert value in database
        $sql = "INSERT INTO student (id, fname, lname, password, email) VALUES ('', '$fi_name', '$la_name', '$pass', '$email')";
        $connect_db->exec($sql);

        // message the insert is done
        echo "<h3>data stored in a database successfully.</h3>";
    }
    catch(PDOException $e){
            echo "ERROR: Hush! Sorry. " ;
    }
        
    // Close connection
    $connect_db = null;
    echo("<a href='../index.php'>HOME</a>");