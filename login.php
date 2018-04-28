<?php
session_start();
$error='';
if (isset($_POST['login'])) 
{
    if (empty($_POST['user']) || empty($_POST['pass']))
    {
        $error = "One or more fields are empty";
        echo $error;
    }
    else
    {
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $connection = new mysqli("localhost","root","Aranya@1998","Gamers");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query = $connection->query("select * from user_data where Password='$password' and Name='$username'");
    $rows = mysqli_num_rows($query);
    $rows2=$query->fetch_assoc();
    if ($rows == 1) 
    {
        $_SESSION['username']=$username;
        $_SESSION['emails']=$rows2['Email_address'];
        $_SESSION['dates']=$rows2['Date'];
        $_SESSION['loggedin'] = true;
        header("location: /pro/home.php");
        exit();
    } else {
        $error = "Username or Password is invalid";
        echo $error;
    }
    }
}
if(isset($_GET['logout']))
{
    session_destroy();
    $_SESSION['loggedin'] = false;
}
?>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" media="all" href="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2.min-03e6a0769e.css"> 
<link rel="stylesheet" href="log2.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body background="/pro/HD-Game-Wallpaper2.jpg" style="background-size: cover;background-repeat: no-repeat;">
    	<br><br><br>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Username" required autofocus>
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login" value="Login">
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
            <section class="content">
            <a href="/pro/home.php" alt="Special Offers" class="button ">
              Back
            </a>
        </section>
        </div><!-- /card-container -->

    </div><!-- /container -->

</body>
</html>