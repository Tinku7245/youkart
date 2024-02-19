
<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){


$password = "";
$database = "user";
$servername = "localhost";
$username = "root";

$con = mysqli_connect($servername, $username, $password, $database);

if($con){
    echo "Database Connection Successful";
} else {
    echo "Database error". mysqli_connect_error();
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password');";

$result = mysqli_query($con, $sql);

if($result){
    echo "Success";
} else {
    echo "Failed";
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="signup-container">
    <form class="signup-form" action="#" method="post">
      <h2>Sign Up</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Sign Up</button>
</body>
</html>