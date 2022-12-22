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
    <link rel="stylesheet" href="./style.css">
    <title>Golden House</title>
</head>
<body>
    <header>
        <?php require_once("parts-template/header.php") ?>
    </header>
    <main>
        <section>
            <?php  
                require_once("./parts-template/register.php")
            ?>
        </section>
    </main>
    <script src="./Js/script.js"></script>
</body>
</html>