<?php

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
$gmail = $_POST['gmail'];
$password = $_POST['password'];

$sql = "INSERT INTO user (username, gmail, password) VALUES('$username', '$gmail', '$password');";

$result = mysqli_query($con, $sql);

if($result){
    echo "Success";
} else {
    echo "Failed";
}

$con->close();

?>