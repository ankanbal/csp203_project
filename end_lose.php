<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8″>
  <title>Yuudh-2D</title>
      <link rel = "shortcut icon" sizes = "256x256" href = "icon.jpg" />
        <style type = "text/css">
            * {
                padding: 0;
                margin: 0;
            }
            body{
                background-image: url('http://10.20.0.135/pro/arrowparas-master/assets/bowMan.gif');
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
            }
            canvas {
                touch-action-delay: none;
                touch-action: none;
                -ms-touch-action: none;
            }
            .wrapper {
                text-align: center;
            }
            #main h1 {
              color: white;
              text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            }
                    
           .button {
              display: block;
              width: 20%;
              margin-left: 40%;
              margin-top: 10%;
              line-height: 30px;
              border: 1px solid #AA2666;
              color: white;
              font-weight: bold;
              text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
              background-color: #FB1886;
              background-image: -webkit-linear-gradient(bottom, #FB1886 0%, #B30D5D 100%);
              background-image:         linear-gradient(to bottom, #FB1886 0%, #B30D5D 100%);
              border-radius: 5px;
          }
          .button:hover {
              background-color: #B30D5D;
              background-image: -webkit-linear-gradient(bottom, #B30D5D 0%, #FB1886 100%);
              background-image:         linear-gradient(to bottom, #B30D5D 0%, #FB1886 100%);
          }
          a{
              text-decoration: none;
          }

</style>
  
</head>
<body>
  <div class="wrapper">
    <div id="menu" class="main">
      <div id="main">

        <br><br>
        <h1>Yuudh-2D</h1>
        <ul>
          <li><a href="http://10.20.0.135/pro/home.php" class="button play">Back to Home</a></li>
        </ul>
      </div>
    </div>
  </div>
 <audio autoplay loop>
      <source src="http://10.20.0.135/pro/arrowparas-master/assets/music.mp3">
  </audio>
  <?php
$servername = "localhost";
$username = "root";
$password = "Aranya@1998";
$database="Gamers";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$my_file = 'arrowparas-master/test.txt';
$myfile=fopen($my_file,'r');
$string=fgets($myfile);
$stt=explode(" ", $string);

    echo '<h2 style="text-align: center;">You lose</h2>';
    echo '<h1 style="text-align: center;">Try better next time.....</h1>';

?> 
</body>
</html>