<html>
    <head>
        <style>
            body{
             background-image: url(3.jpg);
             background-size: 1500px 655px;
                background-repeat: no-repeat
            }
          .mybutton{
                background-color: burlywood;
                text-align: center;
                padding:5px 6px;  
            }
            .mybutton1{
                background-color: gold;
                text-align: center;
                padding:3px 6px;  
            }
        </style>
    </head>
<body>
<button class="mybutton1"> <a href="consumer.html">insert next</a>
 </button><br><br>
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
}//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$con_id=$_POST["t1"];
$con_name=$_POST["t2"];
$con_address=$_POST["t3"];
$con_phone=$_POST["t4"];
$bid_fk=$_POST["t5"];
$rid_fk=$_POST["t6"];

$sql = "INSERT INTO consumer VALUES ('$con_id','$con_name','$con_address',$con_phone,'$bid_fk','$rid_fk')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
 }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
    <br><br>
<button class="mybutton"> <a href="mainpage.html">home</a>
 </button>
</body>
</html>