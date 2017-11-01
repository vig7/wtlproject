<!DOCTYPE html>
<html>
<head>
  <title>Class-hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/fattendance.css">
 <script  src="js/postlogin.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
    <body>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php
    session_start();
    echo '<a><span class="glyphicon glyphicon-user">'."".$_SESSION['user'].'</span></a>';?>
    <a href="addvalue.php">Attendance</a>
    <a href="addvid.php">Videos</a>
    <a href="contact.php">Contact Admin</a>
    <a href="Logout.php" ><span class="glyphicon glyphicon-log-out" "></span> Logout</a>
    
  </div>
   <span style="font-size:30px;color:#FFFFFF;cursor:pointer" onclick="openNav()"> &#9776; Menu </span>
   <div class="BoxAb">
<form method="POST" action="vid.php">
<div class="BoxAc">
<span class="custom-dropdown big" >
	<select  name='subject'>
	<option value='0'>subject</option>
    <option value='cn'>CN</option>
    <option value='os'>OS</option>
    <option value='mp'>MP</option>
    <option value='sooad'>SOOAD</option>
</select>
</span>

<input class="btn btn-primary btn-lg" type="submit" value="submit"></th>
</div>
<table>
	<tr>
	
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thursday</th>
	<th>Friday</th>
	</tr>
	<tr>

		<td><input type="text" name="m" style="color:#000000"></th></td>
		<td><input type="text" name="t" style="color:#000000"></th></td>
		<td><input type="text" name="w" style="color:#000000"></th></td>
		<td><input type="text" name="th" style="color:#000000"></th></td>
		<td><input type="text" name="f" style="color:#000000"></th></td>
	</tr>

</table>
</form>
</div>
</body>
</html>