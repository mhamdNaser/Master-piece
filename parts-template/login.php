<?php
    //login page 
?>
<section>
    <form id="login" action="./db/getdata.php" method="post" >
        <label for="">email</label>
        <input type="email" name="email" value="" placeholder="email">
        <label for="">password</label>
        <input type="text" name="password" value="" placeholder="password">
        <button type="submit" >login</button>
    </form>
</section>