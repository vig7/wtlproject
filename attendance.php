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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="css/attendance.css"> 
 <script  src="js/postlogin.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <STYLE>
  .big {
  font-size: 1.2em;
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
  font-size: .625em;
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
.Box{
      margin-top: 5em;
      margin-left: 27em;
}
.BoxA{
  margin-bottom: 7em;
  margin-left: 20em;
}

</STYLE>
</head>
<body>
  
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
    <a href="Logout.php" ><span class="glyphicon glyphicon-log-out" "></span> Logout</a>
  </div>
  <span style="font-size:30px;color:#FFFFFF;cursor:pointer" onclick="openNav()"> &#9776; Menu </span>
  <?php
$server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");
    function att($conn,$sql)
    {$retval = mysqli_query( $conn, $sql );
      while($row =mysqli_fetch_assoc($retval)) {
      echo "<td>".$row["monday"]."</td>";
      echo"<td>".$row["tuesday"]."</td>";
      echo"<td>".$row["wednesday"]."</td>";
      echo"<td>".$row["thursday"]."</td>";
      echo"<td>".$row["friday"]."</td>";
      }
    }
    ?>
 <div class="Box"> 
  <div class="BoxA">
<span class="custom-dropdown big">
  <form method="POST">
    <select id="wee" name="week">    
        <option value="1" selected="true">WEEK 1</option>  
        <option value="2">WEEK 2</option>
        <option value="3">WEEK 3</option>
        <option value="4">WEEK 4</option>
    </select>
    <input type="submit" value="submit">
  </form>
</span>
</div>
<?php $week=1; ?>
<h2 style="margin-left: 4em;">Student Attendance</h2>

<table>
  <thead>
    <tr>
      <th>Subjects</th>
      <!-- ko foreach: attendance -->
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <!-- /ko -->
    </tr>
  </thead>
  <tbody >
    <tr>
      <td >Microprocessor </td>
       <?php

      if(isset($_POST['week']))
       $week = $_POST['week'];
      
     $sql="SELECT * FROM `tece'mp'` WHERE prn='113A1032' AND week=".$week;
      att($conn,$sql);
      ?>
    </tr>
    <tr>
      <td >Computer Networks</td>
 <?php 
 if(isset($_POST['week']))
      $week = $_POST['week'];
     $sql="SELECT * FROM `tece'cn'` WHERE prn='113A1032' AND week=".$week;
      att($conn,$sql);
      ?>
    </tr>
    <tr>
      <td >Operating Systems </td>
     <?php 
     if(isset($_POST['week']))
     $week = $_POST['week'];
     $sql="SELECT * FROM `tece'os'` WHERE prn='113A1032' AND week=".$week;
      att($conn,$sql);
      ?>
    </tr>
    <tr>
      <td >SOOAD </td>
 <?php 
 if(isset($_POST['week']))
 $week = $_POST['week'];
     $sql="SELECT * FROM `tece'sooad'` WHERE prn='113A1032' AND week=".$week;
    att($conn,$sql);
      ?>
    </tr>
    <tr>
      <td >WTL </td>
 <?php 
 if(isset($_POST['week']))
 $week = $_POST['week'];
     $sql="SELECT * FROM `tece'wtl'` WHERE prn='113A1032' AND week=".$week;
   att($conn,$sql);
      ?>
    </tr>
    <tr>
      <td >BCE </td>
 <?php 
 if(isset($_POST['week']))
 $week = $_POST['week'];
     $sql="SELECT * FROM `tece'bce'` WHERE prn='113A1032' AND week=".$week;
  att($conn,$sql);
      ?>
    </tr>

  </tbody>
</table>
</div>

<!-- tip: use to debug data values -->
<!-- <pre data-bind="text: ko.toJSON($data, null, 2)"></pre> -->
</body>
</html>