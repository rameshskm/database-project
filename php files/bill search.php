<html>
    <head>
    <style>
        body{
            background-image: url(7.jpg);
            background-size:1500px 655px;
            color: darkgoldenrod;
            position: relative;
            left: 20px;
            top: 10px
            
            }
         .mybutton{
                background-color: lightseagreen;
                text-align: center;
                padding:5px 10px;  
            }
        </style>    
    </head>
<body>
<?php
// Create connection
$con = mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("electric bill management");
$n=$_POST["t1"];
$var=mysql_query("select * from bil where bill_no='$n'");
 echo "<table>";
 echo "<tr>
  <th>BILL_NO</th>
  <th>PAID</th>
  <th>NON_PAID</th>
  <th>FINE</th>
  <th>bill_month</th>
  <th>CON_ID</th>
  <th>rid_fk</th>
  <th>bid_fk</th>
  </tr>";
while($arr=mysql_fetch_row($var))
{ 
 echo "<tr>
 <td>$arr[0]</td>
 <td>$arr[1]</td> 
 <td>$arr[2]</td>
 <td>$arr[3]</td>
 <td>$arr[4]</td>
 <td>$arr[5]</td>
 <td>$arr[6]</td>
 <td>$arr[7]</td>
 </tr>";
}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?> 
<button class="mybutton"><a href="mainpage.html">home</a>
</button>
</body>
</html>
