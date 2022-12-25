<?php
    //login page 
?>
<section id="loginSection">
    <div>
        <img src="./image/login.png" alt="" width="100%">
    </div>
    <div>
        <form id="login" action="./db/getdata.php" method="post" >
            <label for="">E-mail</label>
            <input type="email" name="email" value="" placeholder="E-mail">
            <label for="">Password</label>
            <input type="text" name="password" value="" placeholder="Password">
            <button class="submit" type="submit" >login</button>
        </form>
    </div>
    
</section>