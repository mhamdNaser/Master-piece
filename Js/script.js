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
let fname = document.getElementById("fname")
let lname = document.getElementById("lname")
let pass = document.getElementById("password")


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
    if(fname.value === ""){
        document.getElementById("lnerror").innerHTML = "insert first name"
    }
    else{
        if (lname.value.match(pattern)){
            pass.removeAttribute('disabled')
            document.getElementById("lnerror").style.display = "none"
        }
        else{
            document.getElementById("lnerror").innerHTML = "Please use letters only" 
            document.getElementById("lnerror").style.display = "block"
        }
    }
}

checkpass = () => {
    if(fname.value === ""){
        document.getElementById("lnerror").innerHTML = "insert first name"
    }
    else{
        if (lname.value.match(pattern)){
            pass.removeAttribute('disabled')
            document.getElementById("lnerror").style.display = "none"
        }
        else{
            document.getElementById("lnerror").innerHTML = "Please use letters only" 
            document.getElementById("lnerror").style.display = "block"
        }
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