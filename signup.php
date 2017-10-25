   <?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");
   $a=$_POST["user"];
    $b=$_POST["pr"];
    $c=$_POST["br"];
    $d=($_POST["pass"]);
    $e=md5($d);
    $sql="INSERT INTO Student(prn,name,branch,passw) VALUES('$b','$a','$c','$e')";
    if(mysqli_query($conn,$sql))
    {
       echo '<!DOCTYPE html>
                <html>
                <head">
                <script>
                alert("Account Created\nU can login to the system.");
                window.location = "login.php";
                </script>
                </head>
                <body>
                </body>
                </html>';
      

    }
    else
    {

        echo '<!DOCTYPE html>
                <html>
                <head">
                <script>
                alert("Account Could not be Created");
                window.location = "login.php";
                </script>
                </head>
                <body>
                </body>
                </html>';

    }
       
   ?>