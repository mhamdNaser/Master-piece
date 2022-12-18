
<form action="register.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form> 


<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'username', 'password', 'database');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the submitted data from the form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Insert the data into the users table
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
if (mysqli_query($conn, $sql)) {
    // Insertion was successful, redirect to the confirmation page
    header("Location: confirm.php");
} else {
    // Insertion failed, display an error message
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

