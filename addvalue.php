 <style type="text/css">
        #prn{
            display: none !important; 
        } 
    </style>
 <?php session_start();
echo "   <html>
<body>
    <table>
        <form method='POST' action='add.php'>";
          $l=1001;
  $b="115A";
  $c=$b.$l;
        echo"<tr>
            <th>
            <select  name='subject'>
                <option value='0'>subject</option>
                <option value='cn'>CN</option>
                <option value='wtl'>WTL</option>
                <option value='os'>OS</option>
                <option value='mp'>MP</option>
                <option value='sooad'>SOOAD</option>
                <option value='bce'>BCE</option>
            </select>
            </th>
            <th>
            <select name='week'>
            	<option value='0'>week</option>
            	<option value='1'>1</option>
            	<option value='2'>2</option>
            	<option value='3'>3</option>
            	<option value='4'>4</option>
            </select>
            </th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>";
       
       while($l<1011){
       	echo" <tr>
            <th>
           <td>$c</td>
            </th>

           <input id='prn' name='".$c."' value=$c>
            <td><input type='checkbox' name='m".$l."' value='PRESENT'></td>
            <td><input type='checkbox' name='t".$l."' value='PRESENT'></td>
            <td><input type='checkbox' name='w".$l."' value='PRESENT'></td>
            <td><input type='checkbox' name='th".$l."'value='PRESENT'></td>
            <td><input type='checkbox' name='f".$l."' value='PRESENT'></td>
        </tr>";
       $l++;
       $c=$b.$l;
       }
       echo" <input type='submit' value='submit'>
        </form>
    </table>
</body>
</html>";
?>