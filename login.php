
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE (username = '$username') AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        header("Location:index.php");
    } else {
    }
}

$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>


  <div class="login-container">
    <form class="login-form" action="#" method="post">
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>

      <div id="con2">
  <a href="signup.php" class="button">Signup</a>
</div>


      

    </form>
  </div>

</body>
</html>






