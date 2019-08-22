<html>
    <head>
    <style>
        body{
            background-image: url(9.jpg);
            background-size:1500px 655px;
            color: darkgoldenrod;
            position: relative;
            left: 40px;
            top: 20px
            
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
$var=mysql_query("select * from staff");
echo "<table>";
echo "<tr>
<th>rid</th>
<th>con_id</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ 
echo "<tr>
 <td>$arr[0]</td>
 <td>$arr[1]</td> 
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