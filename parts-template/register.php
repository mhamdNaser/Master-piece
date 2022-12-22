<?php
    //registeration page 
?>
<form id="register" action="./db/config.php" method="post" >
    <label for="">Official Status</label>
    <br>
    <select name="type">
        <option></option>
        <option>Student</option>
        <option>Partner</option>
    </select>
    <br>
    <label for="">first name</label>
    <input type="text" name="first_name" value="" placeholder="first name">
    <label for="">last name</label>
    <input type="text" name="last_name" value="" placeholder="last name">
    <label for="">password</label>
    <input type="text" name="password" value="" placeholder="password">
    <label for="">email</label>
    <input type="email" name="email" value="" placeholder="email">
    <button type="submit" >Regiser</button>
</form>