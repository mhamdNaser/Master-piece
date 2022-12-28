<?php
    //login page 
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
        <nav>
            <ul>
                <li><button class="list"><img src="./image/logo1.png" alt="" width="16px"></button></li>
                <li><button class="list">HOME</button></li>
                <li><button class="list">ABOUT</button></li>
                <li><button class="list">CONTACT</button></li>
                <li><button class="list">SEVICE</button></li>
                <li style="float: right;"><button class="list"><img src="./image/user.png" alt="" width="16px"></button></li>
                <li style="float: right;"><button id="btn-regist" class="list" onclick='showrregis()'>REGISTER</button></li>
                <li style="float: right;"><button id="btn-login" class="list" onclick="showrlogin()">LOGIN</button></li>
            </ul>
        </nav>
    </header>
    <main>
    <section id="loginSection">
        <div>
            <img src="./image/login.png" alt="" width="100%">
        </div>
        <div>
            <form id="login" action="./db/getdata.php" method="post" >
                <label for="">E-mail</label>
                <input type="email" name="email" value="" placeholder="E-mail">
                <label for="">Password</label>
                <input type="text" name="password" value="" placeholder="Password"><br>
                <button class="submit" type="submit" >login</button>
            </form>
        </div>   
    </section>
    </main>
    <script src="./Js/script.js"></script>
</body>
</html>