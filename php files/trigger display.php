<html>
    <head>
        <style>
            body{
             background-image: url(envion.jpg);
             background-size: 1500px 655px;
                 position: relative;
                left: 470px;
                top:95px
            }
          .mybutton{
                background-color: burlywood;
                text-align: center;
                padding:5px 6px;  
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
$var=mysql_query("select * from consumer_loginfo");
echo "<table  border size=4>";
echo "<tr>
<th>con_id</th>
<th>con_name</th>
<th>con_addess</th>
<th>con_phone</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ 
echo "<tr>
 <td>$arr[0]</td>
 <td>$arr[1]</td>
  <td>$arr[2]</td>
   <td>$arr[3]</td>
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