<html>
    <head>
    <style>
        body{
            background-image: url(r2.jpg);
            background-size:1500px 655px;
            color: darkviolet
            
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electric bill management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$con_id=$_POST["t1"];
// sql to delete a record
$sqli = "DELETE FROM consumer WHERE con_id='$con_id'";

if ($conn->query($sqli)) {
    echo "one record deleted successfully";
} 
    echo "error to delete record";

$conn->close();
?>
 <br>
<button class="mybutton"><a href="mainpage.html">home</a>
</button>
</body>
</html>
