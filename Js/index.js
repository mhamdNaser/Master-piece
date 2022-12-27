





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