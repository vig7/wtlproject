 <?php
echo "   <html>";
echo"<body>";
	$a=1001;
	$b="115A";
    echo"<table>";
        echo"<form method='POST' action='add.php'>";
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
       while($a<1011){
       	$c=$b.$a;
       echo" <tr>";
          echo"  <th>";
           echo"<td>$c</td>";
           echo" </th>";
           echo" <td><input type='checkbox' name='m' value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='t' value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='w' value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='th'value='PRESENT'></td>";
           echo" <td><input type='checkbox' name='f' value='PRESENT'></td>";
       echo" </tr>";
       $a++;
       }
       echo" <input type='submit' value='submit'>";
       echo" </form>";
   echo" </table>";
echo"</body>";
echo"</html>";
?>