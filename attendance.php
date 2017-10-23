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
  
</head>
<body>
  
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="demo.php">Videos</a>
    <a href="attendance.php">Attendance</a>
    <a href="contact.php">Contact Admin</a>
  </div>
  <span style="font-size:30px;color:#FFFFFF;cursor:pointer" onclick="openNav()"> &#9776; Menu </span>
 
<h2>Student Attendance</h2>
<div class="Box">
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
      <!-- ko foreach: days -->
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
     
      <!-- /ko -->
    </tr>
    <tr>
      <td >Computer Networks</td>
      <!-- ko foreach: days -->
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      
      <!-- /ko -->
    </tr>
    <tr>
      <td >Operating Systems </td>
      <!-- ko foreach: days -->
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
    
      <!-- /ko -->
    </tr>
    <tr>
      <td >SOOAD </td>
      <!-- ko foreach: days -->
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      
      <!-- /ko -->
    </tr>
    <tr>
      <td >WTL </td>
      <!-- ko foreach: days -->
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      
      <!-- /ko -->
    </tr>
    <tr>
      <td >BCE </td>
      <!-- ko foreach: days -->
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      <td><input type="checkbox"/></td>
      
      <!-- /ko -->
    </tr>

  </tbody>
</table>
</div>
<!-- tip: use to debug data values -->
<!-- <pre data-bind="text: ko.toJSON($data, null, 2)"></pre> -->
</body>
</html>