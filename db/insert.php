<?php

    require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $type = $_POST['type'];
    $fi_name = $_POST['first_name'];
    $la_name = $_POST['last_name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    if ($type == "Partner"){

        // insert value in special database
        $sql = "INSERT INTO partners (id, first_name, last_name, password, email) VALUES ('', '$fi_name', '$la_name', '$pass', '$email')";

        // check if data connected
        if ($connect_db->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
        echo "Error: " . $sql . "<br>" . $connect_db->error;
        }
    }
    if($type == "Student"){
        $sql = "INSERT INTO students (id, first_name, last_name, password, email) VALUES ('', '$fi_name', '$la_name', '$pass', '$email')";

        // check if data connected
        if ($connect_db->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
        echo "Error: " . $sql . "<br>" . $connect_db->error;
        }

    }
    else{
        echo "sure your input";
    }

    $connect_db->close();

}

// PDO CODE ------------------------------------------------

// try
//     {
//         // Taking all 5 values from the form data(input)
//         $type = $_REQUEST['type'];
//         $fi_name = $_REQUEST['first_name'];
//         $la_name = $_REQUEST['last_name'];
//         $pass = $_REQUEST['password'];
//         $email = $_REQUEST['email'];

//         // insert value in special database
//         if ($type == "Partner"){
//             $sql = "INSERT INTO partners (id, first_name, last_name, password, email) VALUES ('', '$fi_name', '$la_name', '$pass', '$email')";
//             $connect_db->exec($sql);
//         }
//         if($type == "Student"){
//             $sql = "INSERT INTO students (id, first_name, last_name, password, email) VALUES ('', '$fi_name', '$la_name', '$pass', '$email')";
//             $connect_db->exec($sql);
//         }
        
//     }
//     catch(PDOException $e){
//             echo "ERROR: Hush! Sorry. " ;
//     }
        
//     // Close connection
//     $connect_db = null;
//     