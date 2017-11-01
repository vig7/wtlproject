<?php

$conn = mysqli_connect("localhost", "root", "","signupusers");

// Storing Session

if(isset($_SESSION['user']))

{

$user_check=$_SESSION['user'];

// SQL Query To Fetch Complete Information Of User

$ses_sql=mysqli_query($conn,"select * from student where name='$user_check'");

$row = mysqli_fetch_assoc($ses_sql);

$login_session =$row['name'];

$prn =$row['prn'];

if(!isset($login_session)){

mysqli_close($conn); // Closing Connection // Redirecting To Home Page

}

}

?>