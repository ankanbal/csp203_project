<link rel="stylesheet" type="text/css" media="all" href="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2.min-03e6a0769e.css"> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>.chooser {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.chooser:hover .dropdown-content {
    display: block;
}

.chooser:hover .dropbtn {
    background-color: #3e8e41;
}</style>
            <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >User Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4"> 
                     <aside class="chooser">
                      <img alt="User Pic" src="/pro/Maxx brown (2).jpg" id="profile-image1" class="img-circle img-responsive">
                       <div class="dropdown-content">
                          <a href="/pro/upload.php">Upload new image</a>
                        </div>
                        </aside>
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><?php
            session_start();
            
              echo $_SESSION['username'];
              
            ?></h2>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?php
            session_start();
            
              echo $_SESSION['username'];
              
            ?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php
            session_start();
            
              echo $_SESSION['emails'];
              
            ?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " ><?php
            session_start();
            
              echo "Date Of Joining: ".$_SESSION['dates'];
              
            ?></div>
                      </div>
                </div>
                 <section class="content">
            <a href="/pro/home.php" alt="Special Offers" class="button ">
              Back
            </a>
        </section>
            </div>
            </div>