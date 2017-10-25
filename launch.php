<!DOCTYPE html>
<html lang="en">
<head>
      <title>CLASS-HUB</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/launch.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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
        

<div class="timeline">
  <div class="container left">
    <div class="content" style=" opacity:0.8">
      <h2 style="text-align: center;"><strong><strong><i>CLASS-HUB SYSTE</i>M</strong></strong></h2>
      <h4 style="font-family: Georgia, serif ;font-size :20px;">Class hub is a sysytem where a student of siesgst can login in the system to have the access to the activities going in the college.Focusing on academics the claas hub system integrates videos of the lectures taught in the class which is updated every day. Students absent on the particular day of the week can have access to the videos  taught in class !</h4>
      <a class="btn btn-primary btn-lg" href="login.php" role="button" style="margin-left: 7em;margin-top: 8px;"><strong>Login &raquo;</strong></a>
    </div>
  </div>
  <div class="container right">
    <div class="content" style=";opacity: 0.8">
      <h2 style="text-align: center;"><strong><i>ABOUT SIES GST</i></strong></h2>
      <h4 style="font-family: Georgia, serif ;font-size :20px;">SIES Graduate School of Technology is an engineering college, an integral part of SIES, and was started in the year 2002. It is one of the Institutes in Navi Mumbai imparting Engineering Technical Education. The institute is approved by the AICTE New Delhi, DTE Mumbai and affiliated to the University of Mumbai.</h4>
      <a class="btn btn-primary btn-lg" href="http://www.siesgst.edu.in/" role="button" style="margin-left: 7em;margin-top: 8px"><strong>Explore &raquo;</strong></a>
    </div>
  </div>
  
  
</div>
      
  
</body>
</html>