 <style type="text/css">
        #prn{
            display: none !important; 
        } 
    </style>
 <?php session_start();
echo "   <html>";
echo"<body>";
    echo"<table>";
        echo"<form method='POST' action='add.php'>";
          $l=1001;
          $_SESSION['l']=$l;
  $b="115A";
        echo"<tr>";
            echo"<th>";
            echo"<select  name='subject'>";
               echo" <option value='0'>subject</option>";
               echo" <option value='cn'>CN</option>";
               echo" <option value='wtl'>WTL</option>";
               echo" <option value='os'>OS</option>";
               echo" <option value='mp'>MP</option>";
               echo" <option value='sooad'>SOOAD</option>";
               echo" <option value='bce'>BCE</option>";
           echo" </select>";
           echo" </th>";
           echo" <th>Monday</th>";
           echo" <th>Tuesday</th>";
           echo" <th>Wednesday</th>";
           echo" <th>Thursday</th>";
           echo" <th>Friday</th>";
       echo" </tr>";
       $c=$b.$l;
       while($l<1011){
       	
        
       echo" <tr>";
          echo"  <th>";
           echo"<td>$c</td>";
           echo" </th>";

           echo"<input id='prn' name='".$c."' value=$c>";
           echo" <td><input type='checkbox' name='m".$l."' value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='t".$l."' value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='w".$l."' value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='th".$l."'value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='f".$l."' value='PRESENT'></td>";
       echo" </tr>";
       $l++;
       $c=$b.$l;
       }
       echo" <input type='submit' value='submit'>";
       echo" </form>";
   echo" </table>";
echo"</body>";
echo"</html>";
?>