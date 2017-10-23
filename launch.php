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
<style type="text/css">
  


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
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="highlight.php">HIGHLIGHTS</a></li>
             <li><a href="contact.php">CONTACT US</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(!isset($_SESSION['user']))
            echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          else echo '<li class="dropdown">
                      <a class="dropdown-toggle"data-toggle="dropdown">
                      <span class="glyphicon glyphicon-user"></span> '.$_SESSION['user'].' <span class="caret"></span></a>
                      <ul  class="dropdown-menu">
                        <li>ABC</li>
                        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                      </ul>
                    </li>';?>
        </ul>
        </div>
      </nav>
        
      <div class="container">
        <h1 id="college">SIES GST</h1>
        <p></p>
      </div>
  
</body>
</html>