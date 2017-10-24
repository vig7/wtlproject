<!DOCTYPE html>
<html lang="en">
<head>
      <title>CLASS-HUB</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style >
        body{
         background: url('img/cover.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center; 
        }
        img{
          float:right;
          padding-left: 5px; 
          padding-right: 2px;
          width: 83px;
          height: 96%;
          

        }
        .navbar-brand{

          font-family: sans-serif;
          font-size: 30px;
          font-style: italic;
        }
        .glyphicon.glyphicon-log-in{
          font-size: 20px;
        }

        h1{ 
          font-family: "Impact";
          font-size: 65px;
          font-weight: 50px;
          color:#C9B869;
        }

        #college{
          text-align: center;
        }


</style>
<body>
  <?php session_start();
  ?>
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">CLASS-HUB<img  src="img/gstlogo.png"></a> 
              </div>
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                  <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> CONTACT US</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <?php
                  if(!isset($_SESSION['user']))
                    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                  else echo '<li class="dropdown" >
                              <a class="dropdown-toggle" data-toggle="dropdown">
                              <span class="glyphicon glyphicon-user"></span> '.$_SESSION['user'].' <span class="caret"></span></a>
                              <ul  class="dropdown-menu">
                              <li><a href="attendance.php"  ><span class="glyphicon glyphicon-bookmark" ></span> Attendance</a></li>
                              <li><a href="demo.php"  ><span class="glyphicon glyphicon-facetime-video" ></span> Videos</a></li>
                                <li><a href="Logout.php" ><span class="glyphicon glyphicon-log-out" "></span> Logout</a></li>
                              </ul>
                            </li>';?>
            </ul>
          </div>
      </nav>
        
      <div class="container">
        
          <h2 style="color:#FFFFFF">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </h2>
      </div>
  
</body>
</html>