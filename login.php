<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login-Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    </script>
</head>
<style>
	
	img{
	float:right;
	padding-left: 8px;
	
	width: 83px;
	height: 22px;
}
body{
	
	 background-image: url('img/cover.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
	margin:0;
	color:#6a6f8c;
	font:600 16px/18px 'Open Sans',sans-serif;
}

select{
	padding-left: 165px;
	width:387px;
	height:45px;
	border-radius:45px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
option{

	background:rgba(40,57,101,.9);
	font-family: "Courier New", Courier, monospace;
	font-size: 20px;
}


*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:transparent;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	-webkit-transform:rotateY(180deg);
	        transform:rotateY(180deg);
	-webkit-backface-visibility:hidden;
	        backface-visibility:hidden;
	-webkit-transition:all .4s linear;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	-webkit-perspective:1000px;
	        perspective:1000px;
	-webkit-transform-style:preserve-3d;
	        transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	-webkit-transform:scale(1) rotate(45deg);
	        transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	-webkit-transform:scale(1) rotate(-45deg);
	        transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
</style>

<body>
	  <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		    	<li ><a href="launch.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		       <li ><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> CONTACT US</a></li>
		    </ul>
		   
		  </div>
		</nav>	
	  <div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<form method="POST" action="signin.php">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input name="user" type="text" class="input" required="true">
					</div>
					<div class="group" id="select">
							<label  class="label">BRANCH</label>
							<label  class="label">
									<select name="br" required="true">
										  
										  <option value="CE" selected="true">CE</option>
										  <option value="IT">IT</option>
										  <option value="BT">BT</option>
										  <option value="PPT">PPT</option>
										  <option value="MECH">MECH</option>
									</select>
							</label>
					</div>
					<div class="group" ">
						<label for="pass" class="label">Password</label>
						<input name="pass" type="password" class="input" required="true">
					</div>
					
					
					<div class="group" style="padding-top: 25px;">
						<input type="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>
			</form>
				<form method="POST" action="signup.php">
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input name="user" type="text" class="input" required="true";>
					</div>
					<div class="group">
						<label  class="label">Password</label>
						<input type="password" class="input" data-type="password" name="pass" required="true">
					</div>
					
					<div class="group" id="select">
							<label  class="label">BRANCH</label>
							<label  class="label" >
									<select name="br" required;>
										  <option value="CE" selected="true">CE</option>
										  <option value="IT">IT</option>
										  <option value="BT">BT</option>
										  <option value="PPT">PPT</option>
										  <option value="MECH">MECH</option>
									</select>
							</label>
					</div>
					<div class="group">
						<label for="pass" class="label">PRN</label>
						<input name="pr" type="text" class="input" required="true";>
					</div>
						<div class="group" style="padding-top: 25px;">
						<input type="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
					
				</form>
				</div>
			</div>
		</div>
	</div>
	  
  
</body>
</html>
