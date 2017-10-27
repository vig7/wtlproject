 <?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");
$m=$_POST['m'];
$t=$_POST['t'];
$w=$_POST['w'];
$th=$_POST['th'];
$f=$_POST['f'];
$sub=$_POST['subject'];
$trun="DELETE FROM videos WHERE subject='$sub'";
$sql="INSERT INTO videos(subject,monday,tuesday,wednesday,thursday,friday) VALUES('$sub','$m','$t','$w','$th','$f')";
mysqli_query($conn,$trun);
mysqli_query($conn,$sql);
echo $trun;
echo $sql;
 if($conn)
    {
       echo '<!DOCTYPE html>
                <html>
                <head>
                <script>
                alert("Values Entered");
                window.location="addvid.php";
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
                <head>
                <script>
                alert("Values Not Entered");
                window.location="addvid.php";
                </script>
                </head>
                <body>
                </body>
                </html>';

    }
?>       
