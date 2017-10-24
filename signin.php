<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");

    $a=$_POST["user"];
    $b=$_POST["br"];
    $c=$_POST["pass"];
    $d=md5($c);
    session_start();
     $sql="SELECT * FROM Student WHERE name='$a' AND branch='$b' AND passw='$d'";
if($result=mysqli_query($conn,$sql))
{   
    if(mysqli_num_rows($result)>0)
    {   
        $_SESSION['user']=$a;
        header("Location:highlight.php");
        exit;
        
   	 }
            else
        {
           echo '<!DOCTYPE html>
                <html>
                <head>
                <script>
                alert("InCorrect Details\nTry Again");
                window.location = "login.php";
                </script>
                </head>
                <body>
                </body>
                </html>';
        }
}
#unset($_SESSION['user']) ;
?>
