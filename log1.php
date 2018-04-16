<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['user']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['user'];
$password=$_POST['pass'];
$connection = mysql_connect("localhost", "root", "Aranya@1998", "Gamers");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$query = mysql_query("select * from user_data where Password='$password' AND Name='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: /pro/home.php"); // Redirecting To Other Page
exit();
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>