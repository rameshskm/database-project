<html>
    <head>
    <style>
        body{
            background-image: url(bg5.jpg);
            background-size:1500px 655px;
            color: white;
              position: relative;
                left: 470px;
                top:95px
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
$var=mysql_query("select * from consumer");
echo "<table border size=10 color=black>";
echo "<tr>
<th>con_id</th>
<th>con_name</th>
<th>con_address</th>
<th>con_phone</th>
<th>bid_fk</th>
<th>rid_fk</th>
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