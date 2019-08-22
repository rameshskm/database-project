<html>
    <head>
        <style>
            body{
             background-image: url(bg5.jpg);
             background-size: 1500px 655px;
                color: white;
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
$var=mysql_query("select * from branches");
echo "<table>";
echo "<tr>
<th>bid</th>
<th>bname</th>
<th>bphone</th>
<th>baddress</th>
<th>cid</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ 
echo "<tr>
 <td>$arr[0]</td>
 <td>$arr[1]</td> 
 <td>$arr[2]</td>
 <td>$arr[3]</td>
 <td>$arr[4]</td>
 </tr>";
}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?> 
    <br>
<button class="mybutton"><a href="mainpage.html">home</a>
</button>
</body>
</html>