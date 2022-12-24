<?php

    require_once("./config.php");
    
//     if($_SERVER["REQUEST_METHOD"] === "POST"){

//         $fi_name = $_REQUEST['first_name'];
//         $la_name = $_REQUEST['last_name'];
//         $pass = $_REQUEST['password'];
//         $email = $_REQUEST['email'];


//         $sql = "INSERT INTO student (st_id,st_fname, st_lname, st_password, st_email) VALUES ('0', '$fi_name', '$la_name', '$pass', '$email')";

//         echo  "<br>", $fi_name ,"<br>", $la_name ,"<br>", $pass ,"<br>", $email;
        
//         // Close connection
//         mysqli_close($connection_DB);

// }

try
    {
        // Taking all 5 values from the form data(input)
        $fi_name = $_REQUEST['first_name'];
        $la_name = $_REQUEST['last_name'];
        $pass = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        $sql = "INSERT INTO student (st_id,st_fname, st_lname, st_password, st_email) VALUES ('0', '$fi_name', '$la_name', '$pass', '$email')";

        $$connection_DB->exec($sql);
        echo "<h3>data stored in a database successfully.</h3>";
    }
    catch(PDOException $e){
            echo "ERROR: Hush! Sorry. " ;
    }
        
        // Close connection
        $connection_DB = null;
        echo("<a href='../index.php'>HOME</a>");