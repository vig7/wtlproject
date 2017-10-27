    <style type="text/css">
        #prn{
            display: none !important; 
        } 
    </style>
    <?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");
    include ("addvalue.php");

    $x=1;
    $a=1001;
    while($x<11){
            $prn=$_POST['115A'.$a];
    $b=(isset($_POST['m'.$a]) ? $_POST['m'.$a] : 'ABSENT');
    $c=(isset($_POST['t'.$a]) ? $_POST['t'.$a] : 'ABSENT');
    $d=(isset($_POST['w'.$a]) ? $_POST['w'.$a] : 'ABSENT');
    $e=(isset($_POST['th'.$a]) ? $_POST['th'.$a] : 'ABSENT');
    $f=(isset($_POST['f'.$a]) ? $_POST['f'.$a] : 'ABSENT');
    $subject=$_POST['subject'];
    $week=$_POST['week'];
    $sql="INSERT INTO `tece'$subject'`(prn,monday,tuesday,wednesday,thursday,friday,week) VALUES('$prn','$b','$c','$d','$e','$f','$week')";
    mysqli_query($conn,$sql);
    $x++;
    $a++;
}
    if($conn)
    {
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

?>       
