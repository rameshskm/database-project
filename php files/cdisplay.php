<html>
    <head>
    <style>
        body{
            background-image: url(bg3.jpg);
            background-size:1500px 655px;
            color: white
            
            }
         .mybutton{
                background-color: greenyellow;
                text-align: center;
                padding:5px 10px;  
            }    
             .mybutton1{
                background-color: gold;
                text-align: center;
                padding:3px 6px;  
            }
            
        </style>    
    </head>
<body>
    <button class="mybutton1"> <a href="ecompany.html">back to company</a>
 </button><br><br>
<?php
// Create connection
$con = mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("electric bill management");
$var=mysql_query("select * from ecompany");
echo "<table>";
echo "<tr>
<th>cid</th>
<th>cname</th>
<th>cphone</th>
<th>caddress</th>
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