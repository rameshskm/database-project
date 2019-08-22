<html>
    <head>
        <style>
            body{
             background-image: url(electri%20energy.jpg);
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
<button class="mybutton1"> <a href="region%20located.html">insert next</a>
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
$rid=$_POST["t1"];
$rname=$_POST["t2"];
$rlocation=$_POST["t3"];
$bid_fk=$_POST["t4"];

$sql = "INSERT INTO r_located VALUES ('$rid','$rname','$rlocation','$bid_fk')";
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