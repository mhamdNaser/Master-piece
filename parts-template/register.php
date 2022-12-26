<?php
    //registeration page 
?>
<section id="registeration">
    <div>
        <img src="./image/register.png" alt="" width="100%">
    </div>
    <div>
        <form id="register" action="" method="post" >
            <label for="">Official Status</label>
            <br>
            <select name="type">
                <option></option>
                <option value="Student">Student</option>
                <option value="Partner">Partner</option>
            </select>
            <br>
            <label for="">First Name</label>
            <input type="text" id="fname" name="first_name" value="" placeholder="First Name" onchange="checkfname()">
            <p class="errormessage" id="fnerror"></p>
            <label for="">Last Name</label>
            <input type="text" id="lname" name="last_name" value="" placeholder="Last Name" onchange="checklname()" disabled>
            <p class="errormessage" id="lnerror"></p>
            <label for="">Password</label>
            <input type="password" id="password" name="password" value="" placeholder="Password" onchange="checkpass()" disabled>
            <label for="">Repeat Password</label>
            <input type="password" id="conf-password" name="conf-password" value="" placeholder="Repeat Password" disabled>
            <label for="">E-mail</label>
            <input type="email" id="email" name="email" value="" placeholder="E-mail" disabled>
            <button class="submit" type="submit" >Regiser</button>
        </form>
    </div>
</section>