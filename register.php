

    <?php 
    
        include('component/header.php');
        require_once("./db/database.php");
        $x = new connection();

        if(isset($_POST['register'])){

            $type = $_POST['type'];
            $fi_name = $_POST['first_name'];
            $la_name = $_POST['last_name'];
            $pass = $_POST['password'];
            $email = $_POST['email'];

            if ($type == "Partner"){

                // insert value in special database
                $sql = $x->performQuery("INSERT INTO partners ( first_name, last_name, password, email) VALUES ( '$fi_name', '$la_name', '$pass', '$email')");
                $x->openConnection()->close();
            }
            if($type == "Student"){

                // insert value in special database
                $sql = $x->performQuery("INSERT INTO students ( first_name, last_name, password, email) VALUES ( '$fi_name', '$la_name', '$pass', '$email')");
                $x->openConnection()->close();
            }

            header('location:login.php');

        }
    
    ?>
    <main>
    <section  class="formcontainer">
        <div  class="formimage">
            <img src="./image/register.png" alt="" width="100%">
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
                <input type="text" id="fname" name="first_name" required placeholder="First Name" onchange="checkfname()">
                <p class="errormessage" id="fnerror"></p>
                <label for="">Last Name</label>
                <input type="text" id="lname" name="last_name" required placeholder="Last Name" onchange="checklname()">
                <p class="errormessage" id="lnerror"></p>
                <label for="">Password</label>
                <input type="password" id="password" name="password" required placeholder="Password" onchange="checkpass()">
                <i id="truth" class="material-icons truth"></i>
                <p class="errormessage" id="passerror"></p>
                <label for="">Repeat Password</label>
                <input type="password" id="conf-password" name="conf-password" required placeholder="Repeat Password" onchange="recheckpass()">
                <i id="truth1" class="material-icons truth"></i>
                <p class="errormessage" id="repasserror"></p>
                <label for="">E-mail</label>
                <input type="email" id="email" name="email" required placeholder="E-mail" onchange="checkemail()">
                <p class="errormessage" id="mailerror"></p><br>
                <button id="submit" class="submit" name="register" type="">Regiser</button>
            </form>
        </div>
    </section>
    </main>
    <script src="./Js/script.js"></script>
</body>
</html>
