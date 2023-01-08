// let pattern = "^[a-zA-Z ]*$"
// let regPass = "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])([a-zA-Z0-9@$!%*?&]{12,32}$)"
// let regPass1 = "^(?=.*[0-9])(?=.*[a-z])([a-zA-Z0-9]{8,12})"
// let regPass2 = "^(?=.*[a-z])([a-zA-Z0-9]{8})"
// let regmail = "^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value)"

// let fname = document.getElementById("fname")
// let lname = document.getElementById("lname")
// let pass = document.getElementById("password")
// let repass = document.getElementById("conf-password")
// let mail =  document.getElementById("email")
// let btnsubmit = document.getElementById("submit")

showlist = () => {
    document.getElementById("dropdownlist").style.display = "block"
}

// function logSubmit(event) {
//     if( fname.value == ""){
//         document.getElementById("fnerror").innerHTML = "Please insert first name" 
//         document.getElementById("fnerror").style.display = "block"
//     }
//     if( lname.value == ""){
//         document.getElementById("fnerror").innerHTML = "Please insert last name" 
//         document.getElementById("fnerror").style.display = "block"
//     }
//     if( pass.value == ""){
//         document.getElementById("fnerror").innerHTML = "Please insert password" 
//         document.getElementById("fnerror").style.display = "block"
//     }
//     if( fname.value == ""){
//         document.getElementById("fnerror").innerHTML = "Please insert first name" 
//         document.getElementById("fnerror").style.display = "block"
//     }
//     document.getElementById("registeration").style.display = 'none'
//     document.getElementById("loginSection").style.display = 'grid'
// }

// checkfname = () => {
//     if (fname.value.match(pattern)){
//         lname.removeAttribute('disabled')
//         document.getElementById("fnerror").style.display = "none"
//     }
    
//     else{
//         document.getElementById("fnerror").innerHTML = "Please Use Letters Only" 
//         document.getElementById("fnerror").style.display = "block"
//     }
// }

// checklname = () => {
//     if (lname.value.match(pattern)){
//         pass.removeAttribute('disabled')
//         document.getElementById("lnerror").style.display = "none"
//     }
//     else{
//         document.getElementById("lnerror").innerHTML = "Please Use Letters Only" 
//         document.getElementById("lnerror").style.display = "block"
//     }
// }

// checkpass = () => {
//     if (pass.value.match(regPass)){
//         repass.removeAttribute('disabled')
//         document.getElementById("truth").innerHTML = "done"
//         document.getElementById("truth").style.color = "#008000"
//         document.getElementById("truth").style.textShadow = "0px 0px 4px #008000"
//     }
//     else if (pass.value.match(regPass1)){
//         repass.removeAttribute('disabled')
//         document.getElementById("truth").innerHTML = "warning"
//         document.getElementById("truth").style.color = "#ffa500"
//         document.getElementById("truth").style.textShadow = "0px 0px 4px #ffa500"

//     }
//     else if (pass.value.match(regPass2)){
//         document.getElementById("truth").innerHTML = "error"
//         document.getElementById("truth").style.color = "#f03e3e"
//         document.getElementById("truth").style.textShadow = "0px 0px 4px #f03e3e"
//         document.getElementById("passerror").innerHTML = "Your Password Is Poor"
//         document.getElementById("passerror").style.display = "block"
//     }
// }

// recheckpass = () => {
//     console.log('errror')
//     if (pass.value == repass.value && pass.value != "" ){
//         document.getElementById("truth1").innerHTML = "done"
//         document.getElementById("truth1").style.color = "#008000"
//         document.getElementById("truth1").style.textShadow = "0px 0px 4px #008000"
//         mail.removeAttribute('disabled')
//     }
//     else{
//         document.getElementById("truth1").innerHTML = "error"
//         document.getElementById("truth1").style.color = "#f03e3e"
//         document.getElementById("truth1").style.textShadow = "0px 0px 4px #f03e3e"
//         document.getElementById("repasserror").innerHTML = "Your Password  And Repeat Password Isn't Match"
//         document.getElementById("repasserror").style.display = "block"
//     }
// }

// checkemail = () => {
//     if (mail.value.match(regmail)){
//         document.getElementById("submit").getAttribute('type', 'submit')
//     }
//     else{
        
//     }
// }





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


