<?php
    //registeration page 
    require_once('./db/insert.php');
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
    <?php include('header.php'); ?>
    <main>
    <section>
        <div>
            <img src="./image/register.png" alt="" width="90%">
        </div>
        <div>
            <form id="register" action="" method="POST">
                <label for="">Official Status</label>
                <select name="type">
                    <option></option>
                    <option value="Student">Student</option>
                    <option value="Partner">Partner</option>
                </select>
                <br>
                <label for="">First Name</label>
                <input type="text" id="fname" name="first_name" value="" autocomplete="off" placeholder="First Name" onchange="checkfname()">
                <p class="errormessage" id="fnerror"></p>
                <label for="">Last Name</label>
                <input type="text" id="lname" name="last_name" value="" autocomplete="off" placeholder="Last Name" onchange="checklname()">
                <p class="errormessage" id="lnerror"></p>
                <label for="">Password</label>
                <input type="password" id="password" name="password" value="" autocomplete="off" placeholder="Password" onchange="checkpass()">
                <i id="truth" class="material-icons truth"></i>
                <p class="errormessage" id="passerror"></p>
                <label for="">Repeat Password</label>
                <input type="password" id="conf-password" name="conf-password" value="" autocomplete="off" placeholder="Repeat Password" onchange="recheckpass()">
                <i id="truth1" class="material-icons truth"></i>
                <p class="errormessage" id="repasserror"></p>
                <label for="">E-mail</label>
                <input type="email" id="email" name="email" value="" autocomplete="off" placeholder="E-mail" onchange="checkemail()">
                <p class="errormessage" id="mailerror"></p><br>
                <button id="submit" class="submit" type="" onclick="submitForm()">Regiser</button>
            </form>
        </div>
    </section>
    </main>
    <script src="./Js/script.js"></script>
</body>
</html>
