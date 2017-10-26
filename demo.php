
<?php
  session_start();
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Class-hub</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
   
    .w3-card-4{
        float: left;
        margin-left: 7px;
    }

    #menu{
        overflow-y: hidden;
        margin-top: 5px;
    }
    .w3-container{
        background:black ;
        color: white;
    }
    .timing{
        margin-top: 0px;
        float: right;
        color: indianred;
    }
    .w3-button{
        margin: 7px 0px;
       width: 40%;
       }
    p{
        margin: 0px;
    }
    
    img {
  max-width: 100%;
  
  
}
.w3-card-4:hover {
  -moz-transform: scale(1.09);
  -webkit-transform: scale(1.09);
  transform: scale(1.09);
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
    
</style>

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
        
          padding-left: 5%;
          ;
         
        }
         #frame2{
        width: 95%;
        height: 200px;
       
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

.w3-card-4{
       margin-top:3em;
        margin-left:1em;
    }
 .w3-button{
        margin: 7px 0px;
       width: 40%;
       }
  .BoxA{
    width:1250px;
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
    
    <form method="POST" action="demo.php">
      <span class="custom-dropdown big" style="margin-right: 10px;">
    <select name="subject">    
        <option selected="true" value="missed" >Missed Videos</option>
        <option value="mp">Microprocessor</option>  
        <option value="cn">Computer Networks</option>
        <option value="os">Operating Systems</option>
        <option value="sooad">SOOAD</option>
    </select>
  </span>
    <input type="submit" value="submit" class="btn btn-primary btn-lg">
 
  </form>

  </div>
  <?php
  if(isset($_POST['subject']))
    $sub=$_POST['subject'];
  else $sub='mp';
  ?>
  <div class="Box" style="margin-left: 6em;">
    <div class="row">
  <div class="col-sm-9" >
    <?php
    $vid=mysqli_query($conn,"SELECT monday FROM videos WHERE subject='missed'");
    $row=mysqli_fetch_assoc($vid);
    if(isset($_POST['vdourl'])){
      $src=$_POST['url'];
    }else{
      $src=$row['monday'];
    }
    ?>
          <iframe id="main-video" width="560" height="400" src=<?php echo $src.'?autoplay=1'; ?> frameborder="0"; allowfullscreen; ></iframe>
        </div>

  <div class="col-sm-9" >
<div id="menu" class="BoxA">
  <div class="w3-card-4 " style="width:18%; ">
    <?php
    $vid=mysqli_query($conn,"SELECT monday FROM videos WHERE subject='$sub'");
    $row=mysqli_fetch_assoc($vid);
    ?>
    
    <iframe width="200" height="130" src=<?php echo $row['monday']; ?> frameborder="0" allowfullscreen id="iff"></iframe>
    <center><form action="demo.php" method="POST">
      <input type="hidden" name="url" value=<?php echo $row['monday']; ?>>
    <input type="submit" name ="vdourl" value="View" id="bt" class="w3-button w3-green w3-center">
    </form>
   </center> 
    </div>
    <div class="w3-card-4 " style="width:18%; ">
    <?php
    $vid2=mysqli_query($conn,"SELECT tuesday FROM videos WHERE subject='$sub'");
    $row2=mysqli_fetch_assoc($vid2);
    ?>
    <iframe width="200" height="130" src=<?php echo $row2['tuesday']; ?> frameborder="0" allowfullscreen  id="iff"></iframe>
    <center><form action="demo.php" method="POST">
      <input type="hidden" name="url" value=<?php echo $row2['tuesday']; ?>>
    <input type="submit" name ="vdourl" value="View" id="bt" class="w3-button w3-green w3-center">
    </form></center> 
    </div>
    <div class="w3-card-4 " style="width:18%; ">
    <?php
    $vid=mysqli_query($conn,"SELECT wednesday FROM videos WHERE subject='$sub'");
    $row=mysqli_fetch_assoc($vid);
    ?>
    <iframe width="200" height="130" src=<?php echo $row['wednesday']; ?> frameborder="0" allowfullscreen  id="iff"></iframe>
    <center><form action="demo.php" method="POST">
      <input type="hidden" name="url" value=<?php echo $row['wednesday']; ?>>
    <input type="submit" name ="vdourl" value="View" id="bt" class="w3-button w3-green w3-center">
    </form></center> 
    </div>
    <div class="w3-card-4 " style="width:18%; ">
    <?php
    $vid=mysqli_query($conn,"SELECT thursday FROM videos WHERE subject='$sub'");
    $row=mysqli_fetch_assoc($vid);
    ?>
    <iframe width="200" height="130" src=<?php echo $row['thursday']; ?> frameborder="0" allowfullscreen  id="iff"></iframe>
    <center><form action="demo.php" method="POST">
      <input type="hidden" name="url" value=<?php echo $row['thursday']; ?>>
    <input type="submit" name ="vdourl" value="View" id="bt" class="w3-button w3-green w3-center">
    </form></center> 
    </div>
   <div class="w3-card-4 " style="width:18%; ">
    <?php
    $vid=mysqli_query($conn,"SELECT friday FROM videos WHERE subject='$sub'");
    $row=mysqli_fetch_assoc($vid);
    ?>
    <iframe width="200" height="130" src=<?php echo $row['friday']; ?> frameborder="0" allowfullscreen  id="iff"></iframe>
    <center><form action="demo.php" method="POST">
      <input type="hidden" name="url" value=<?php echo $row['friday']; ?>>
    <input type="submit" name ="vdourl" value="View" id="bt" class="w3-button w3-green w3-center">
    </form></center> 
    </div>
    
    </div>
  </div>
</div>

</div>
 </div>
</body>
</html>
