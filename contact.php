<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
	<title>contact</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    function go(){
      var msg=ValidateEmail();
      if(!msg){
        alert("Please enter Valid Email");
      }
      if(document.getElementsById("FullName").value==null||document.getElementsById("Email").value==null||document.getElementsById("comments").value==null||document.getElementsById("Subject").value==null)
      {
        alert("Please enter Valid Data");
      }
      else
        alert("Response sent\nYou will be directed to Mail client.");
    }
  </script>
  <style >
    p{
  font-weight: 20px;
  color:#000000; 
}
body{
  background-image: url('img/cont.jpg');
  background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;


}
.Box{
  margin-top: 30em;
}

h1{
  
  font-family: "Arial Black",Gadget,sans-serif;
  font-style: italic;
  font-size: 50px;
  text-align: center;
  color:#E28C3B;
}

.card {
  
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 225px;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 20px 40px 0 rgba(0,0,0,0.4);
}

img {
    border-radius: 8px 8px 0 0;
    width: 100%;
    height: 280px;
}
.row{
  padding-left: 70px;
}

}
h4{
  font-family: sans-serif;
  color:#000000;
}

.ccheader {
  margin: 0 auto;
  padding: 2em;
  text-align: center;
}

.ccheader h1 {
  margin: 0;
  font-weight: 300;
  font-size: 2.5em;
  line-height: 1.3;
}
.ccheader {
  margin: 0 auto;
  padding: 2em;
  text-align: center;
}

.ccheader h1 {
  margin: 0;
  font-weight: 300;
  font-size: 2.5em;
  line-height: 1.3;
}

/* Form CSS*/
.ccform {
   margin: 0 auto;
    width: 800px;
}
.ccfield-prepend{
  margin-bottom:10px;
  width:100%;
}

.ccform-addon{
  color:#f8ae45; 
  float:left;
  padding:8px;
  width:8%;
  background:#FFFFFF;
  text-align:center;  
}

.ccformfield {
  color:#000000; 
  background:#FFFFFF;
  border:none;
  padding:15.5px;
  width:91.9%;
  display:block;
  font-family: 'Lato',Arial,sans-serif;
  font-size:14px;
}

.ccformfield {
  font-family: 'Lato',Arial,sans-serif;
}
.ccbtn{
  display:block;
  border:none;
  background:#f8ae45;
  color:#FFFFFF;
  padding:12px 25px;
  cursor:pointer;
  text-decoration:none;
  font-weight:bold;
}
.ccbtn:hover{
  background:#d8850e;

}
.credit {
  width: 800px;
  clear:both;
margin:0 auto;
  line-height:25px;
 padding: 25px 50px; 
text-align: center;
}
.credit em{
margin-right:5px;
}
.credit a {
color: #000;
font-weight: bold;
text-decoration: none;
}

  </style>

</head>
<body>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
           <ul class="nav navbar-nav">
            <li><a href="launch.php"><span class="glyphicon glyphicon-home"> HOME</span></a></li>
             <li class="active"><a href="contact.php"><span class="glyphicon glyphicon-envelope">  CONTACT US</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(!isset($_SESSION['user']))
            echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          else echo '<li class="dropdown" >
                      <a class="dropdown-toggle"data-toggle="dropdown">
                      <span class="glyphicon glyphicon-user"></span> '.$_SESSION['user'].' <span class="caret"></span></a>
                      <ul  class="dropdown-menu" >
                      <li><a href="attendance.php"  ><span class="glyphicon glyphicon-bookmark" ></span> Attendance</a></li>
                      <li><a href="demo.php"  ><span class="glyphicon glyphicon-facetime-video" ></span> Videos</a></li>
                        <li><a href="Logout.php" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                      </ul>
                    </li>';?>
        </ul>
        </div>
      </nav>
	<div class="row">
      <div class="col-md-4">
	
		<div class="card" id="c1">
		  <img src="img/sparsh.jpeg" alt="Avatar" >
		  <div class="container">
			    <h4><b>SPARSH ARORA</b></h4> 
			    <p>115A1032</p> 
  		  </div>
  		</div>
  	</div>
  	<div class="col-md-4">
	   <div class="card" id="c2">
		  <img src="img/sanket.jpg" alt="Avatar" >
		  <div class="container">
		    <h4><b>SANKET BAILMARE</b></h4> 
		    <p>115A1035</p> 
		  </div>
		</div>
	</div>
	<div class="col-md-4">
	  <div class="card" id="c3">
		  <img src="img/somesh.jpeg" alt="Avatar" >
		  <div class="container">
		    <h4><b>SOMESH BANERJEE</b></h4> 
		    <p>115A1037</p> 
		  </div>
		</div>
</div>
<div class="Box">
<h1>CONTACT US</h1>
<div class="wrapper">
    <form method="post" action="mailto:bailmaresanket310@gmail.com" class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" type="text"  name="FullName" placeholder="Full Name" required="true";>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" type="text"  name="Email" placeholder="a@b.com" required="true";>
    </div>
     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
        <input class="ccformfield" type="text" name= "Subject" placeholder="Subject" required="true";>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
        <textarea class="ccformfield" name="comments" rows="8" placeholder="Message" required="true";></textarea>
    </div>
    <div class="ccfield-prepend">
        <input class="ccbtn" type="submit" value="Submit" onclick="go()">
    </div>
    </form>
</div>
</div>
</body>
</html>