function showrregis () {
    document.getElementById("registeration").style.display = 'grid'
    document.getElementById("registeration").style.gridTemplateColumns = '50% 50%'
    document.getElementById("loginSection").style.display = 'none'
    
}

showrlogin = () => {
    document.getElementById("loginSection").style.display = 'grid'
    document.getElementById("loginSection").style.gridTemplateColumns = '50% 50%'
    document.getElementById("registeration").style.display = 'none'
}

let pattern = "^[a-zA-Z]+$"
let regPass = "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])([a-zA-Z0-9@$!%*?&]{12,32}$)"
let regPass1 = "^(?=.*[0-9])(?=.*[a-z])([a-zA-Z0-9]{8,12})"
let regPass2 = "^(?=.*[a-z])([a-zA-Z0-9]{8})"
let fname = document.getElementById("fname")

let lname = document.getElementById("lname")
let pass = document.getElementById("password")
let repass = document.getElementById("conf-password")
let mail =  document.getElementById("email")


checkfname = () => {
    if (fname.value.match(pattern)){
        lname.removeAttribute('disabled')
        document.getElementById("fnerror").style.display = "none"
    }
    else{
        document.getElementById("fnerror").innerHTML = "Please use letters only" 
        document.getElementById("fnerror").style.display = "block"
    }
}

checklname = () => {
    if (lname.value.match(pattern)){
        pass.removeAttribute('disabled')
        document.getElementById("lnerror").style.display = "none"
    }
    else{
        document.getElementById("lnerror").innerHTML = "Please use letters only" 
        document.getElementById("lnerror").style.display = "block"
    }
}

checkpass = () => {
    if (pass.value.match(regPass)){
        repass.removeAttribute('disabled')
        document.getElementById("bestpass").style.display = "flex"
        document.getElementById("goodpass").style.display = "none"
        document.getElementById("smallpass").style.display = "none"
    }
    else if (pass.value.match(regPass1)){
        repass.removeAttribute('disabled')
        document.getElementById("goodpass").style.display = "flex"
        document.getElementById("bestpass").style.display = "none"
        document.getElementById("smallpass").style.display = "none"
    }
    else if (pass.value.match(regPass2)){
        document.getElementById("smallpass").style.display = "flex"
        document.getElementById("bestpass").style.display = "none"
        document.getElementById("goodpass").style.display = "none"
    }
}

recheckpass = () => {
    if (pass.value == repass.value && pass.value != "" ){
        document.getElementById("match").style.display = "flex"
        document.getElementById("notmatch").style.display = "none"
        mail.removeAttribute('disabled')
    }
    else{
        document.getElementById("notmatch").style.display = "flex"
        document.getElementById("match").style.display = "none"
    }
}





// const mysql = require('./db/config.php')
// // Search for a value in the database
// const queryString = `SELECT * FROM table_name WHERE column_name = '${searchValue}'`;
// connection.query(queryString, (error, results) => {
//     if (error) {
//         throw error;
//     }

//     // Check if the value was found in the database
//     if (results.length > 0) {
//         console.log(`Value '${searchValue}' found in database`);
//     } else {
//         console.log(`Value '${searchValue}' not found in database`);
//     }
// });

// // Close the connection
// connection.end();


// const mysql = require('mysql');

// const connection = mysql.createConnection({
//   host: 'localhost',
//   user: 'myuser',
//   password: 'mypassword',
//   database: 'mydatabase'
// });

// connection.connect();

// const input = 'some input';
// const sql = `INSERT INTO table (column) VALUES (?)`;
// const params = [input];

// connection.query(sql, params, (error, results, fields) => {
//   if (error) throw error;
//   console.log('Input saved to database');
// });

// connection.end();