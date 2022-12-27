<?php
    //  this is home page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Golden House</title>
</head>
<body>
    <header>
        <?php require_once("parts-template/header.php") ?>
    </header>
    <main>
        <?php  
            include("./parts-template/register.php");
        ?>
        <?php  
            require_once("./db/config.php");
            include("./parts-template/login.php");
        ?>
    </main>
    <script src="./Js/script.js"></script>
    inpu
</body>
</html>