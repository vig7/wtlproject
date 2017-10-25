<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class-hub</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <script  src="js/postlogin.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    var blink_speed = 300;
     var t = setInterval(function () { var ele = document.getElementById('blinker'); ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');

   ; }, blink_speed);


  </script>
  <style type="text/css">
      iframe{
        border: none;
      }
      #main-video{
          width: 100%;
          margin-left: 12em;
          }
      
      #frame1{
        width: 95%;
        height: 200px;
        border:;
          padding-left: 5%;
          ;
         
        }
         #frame2{
        width: 95%;
        height: 200px;
        border:;
          padding-left: 5%;
          ;
         
        }
      .missed-lectures{
          margin: 15px;
          width: 100%;
      }
      h3{
          
          color: white;
         text-align: center;
         margin-top: 3em;
      }
      
       .bl{
        color: black;
        background-color:#CF3F2F;
        height: 40px;
        width: 40px;
        border-radius:25%;
        border: none;
        float: left;
        margin-left: px;
    }
    
   .br{
        color: black;
        background-color:#CF3F2F;
        height: 40px;
        width: 40px;
        border-radius: 25%;
        border: none;
        float: right;
        margin-right: 60px;
    }
    .but1{
        position: relative;
        top: -100px;
    }
    /* Custom dropdown */
.custom-dropdown {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 10px; /* demo only */
}

.custom-dropdown select {
  background-color: #1abc9c;
  color: #fff;
  font-size: inherit;
  padding: .5em;
  padding-right: 2.5em; 
  border: 0;
  margin: 0;
  border-radius: 3px;
  text-indent: 0.01px;
  text-overflow: '';
  -webkit-appearance: button; /* hide default arrow in chrome OSX */
}

.custom-dropdown::before,
.custom-dropdown::after {
  content: "";
  position: absolute;
  pointer-events: none;
}

.custom-dropdown::after { /*  Custom dropdown arrow */
  content: "\25BC";
  height: 1em;
  font-size: .650em;
  line-height: 1;
  right: 1.2em;
  top: 50%;
  margin-top: -.5em;
}

.custom-dropdown::before { /*  Custom dropdown arrow cover */
  width: 2em;
  right: 0;
  top: 0;
  bottom: 0;
  border-radius: 0 3px 3px 0;
}

.custom-dropdown select[disabled] {
  color: rgba(0,0,0,.3);
}

.custom-dropdown select[disabled]::after {
  color: rgba(0,0,0,.1);
}

.custom-dropdown::before {
  background-color: rgba(0,0,0,.15);
}

.custom-dropdown::after {
  color: rgba(0,0,0,.4);
}

    </style>
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php
    echo '<a><span class="glyphicon glyphicon-user">'."".$_SESSION['user'].'</span></a>';?>
    <a href="highlight.php">Highlights</a>
    <a href="attendance.php">Attendance</a>
    <a href="demo.php">Videos</a>
    <a href="contact.php">Contact Admin</a>
    <a href="Logout.php" ><span class="glyphicon glyphicon-log-out" ></span> Logout</a>
  </div>
  <span style="font-size:30px;color:#FFFFFF;cursor:pointer; padding-left:10px;" onclick="openNav()"> &#9776; Menu </span>
  <div  style="float: right;" >
    <span class="custom-dropdown big">
    <select onChange="window.location.href=this.value">    
        <option selected="true" disabled>SELECT SUBJECTS </option>
        <option value="#mp">Microprocessor</option>  
        <option value="#cn">Computer Networks</option>
        <option value="#os">Operating Systems</option>
        <option value="sooad">SOOAD</option>
    </select>
</span>
  </div>
  
  
  <div class="Box">
    <div class="row">
          <div class="col-sm-9" >
          <iframe id="main-video" width="560" height="400" src="https://www.youtube.com/embed/qpgTC9MDx1o" frameborder="0" allowfullscreen></iframe>
        </div>
     <div class="col-sm-9 missed-lectures" >
         <h3 id="blinker" style="margin-bottom: 1em;color:#FFFFFF;"><strong>VIDEOS YOU HAVE MISSED LECTURES!</strong></h3>
     <iframe class="mySlides2" id="frame1"  src="sanky.html">
              <p>Your browser does not support iframes.</p>
            </iframe>
</div>
<div class="col-sm-9 missed-lectures" >
         <h3 style="margin-bottom: 1em;" id="mp"><strong>Microprocessor</strong></h3>
        <iframe class="mySlides2" id="frame2"  src="sanky.html">
              <p>Your browser does not support iframes.</p>
            </iframe>
         
        
</div>
<div class="col-sm-9 missed-lectures" >
         <h3 style="margin-bottom: 1em;" id="cn"><strong>Computer Networks</strong></h3>
        <iframe class="mySlides2" id="frame2"  src="sanky.html">
              <p>Your browser does not support iframes.</p>
            </iframe>
         
        
</div>
<div class="col-sm-9 missed-lectures" >
         <h3 style="margin-bottom: 1em;" id="os"><strong>Operating Systems</strong></h3>
        <iframe class="mySlides2" id="frame2"  src="sanky.html">
              <p>Your browser does not support iframes.</p>
            </iframe>
         
        
</div>
<div class="col-sm-9 missed-lectures" >
         <h3 style="margin-bottom: 1em;" id="sooad"><strong>SOAAD</strong></h3>
        <iframe class="mySlides2" id="frame2"  src="sanky.html">
              <p>Your browser does not support iframes.</p>
            </iframe>
         
        
</div>
</div>
  </div>
</body>
</html>
