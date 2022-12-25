<?php
    //registeration page 
?>
<section id="registeration">
    <div>
        <img src="./image/register.png" alt="" width="100%">
    </div>
    <div>
        <form id="register" action="./db/insert.php" method="post" >
            <label for="">Official Status</label>
            <br>
            <select name="type">
                <option></option>
                <option value="Student">Student</option>
                <option value="Partner">Partner</option>
            </select>
            <br>
            <label for="">First Name</label>
            <input type="text" name="first_name" value="" placeholder="First Name">
            <label for="">Last Name</label>
            <input type="text" name="last_name" value="" placeholder="Last Name">
            <label for="">Password</label>
            <input type="text" name="password" value="" placeholder="Password">
            <label for="">E-mail</label>
            <input type="email" name="email" value="" placeholder="E-mail">
            <button class="submit" type="submit" >Regiser</button>
        </form>
    </div>
</section>