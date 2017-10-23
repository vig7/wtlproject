     <?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");
    $x=1;
    while($x<11){
    $a = $_POST['$c'];
    $b=(isset($_POST['m']) ? $_POST['m'] : 'ABSENT');
    $c=(isset($_POST['t']) ? $_POST['t'] : 'ABSENT');
    $d=(isset($_POST['w']) ? $_POST['w'] : 'ABSENT');
    $e=(isset($_POST['th']) ? $_POST['th'] : 'ABSENT');
    $f=(isset($_POST['f']) ? $_POST['f'] : 'ABSENT');
    $subject=$_POST['subject'];
    $sql="INSERT INTO `tece'$subject'`(prn,monday,tuesday,wednesday,thursday,friday) VALUES('$a','$b','$c','$d','$e','$f')";
    mysqli_query($conn,$sql);
    $x++;
}
   /* {
       echo '<!DOCTYPE html>
                <html>
                <head">
                <script>
                alert("Values Entered");
                window.location="addvalue.php";
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
                alert("Values Not Entered");
                window.location="addvalue.php";
                </script>
                </head>
                <body>
                </body>
                </html>';

    }
*/
?>       