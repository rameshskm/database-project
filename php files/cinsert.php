<html>
    <head>
        <style>
            body{
             background-image: url(power-lines-34.jpg);
             background-size: cover
            }
          .mybutton{
                background-color: burlywood;
                text-align: center;
                padding:5px 6px;  
            }
            .mybutton1{
                background-color: burlywood;
                text-align: center;
                padding:3px 6px;  
            }
             .mybutton2{
                background-color: burlywood;
                text-align: center;
                padding:3px 5px;  
            }
            hk2{
                position: relative;
                left:-70px;
                top:20px
            } 
            hk1{
                position: relative;
                left:200px;
                top:20px
            }

             hk{
                position: relative;
                left:10px;
                top:20px
            }
        </style>
    </head>
<body>
     <hk><button class="mybutton"> <a href="mainpage.html"><I>HOME</I></a>
          </button></hk>
      <hk1><button class="mybutton1"> <a href="cinsert.html"><I>INSERT NEXT</I></a>
           </button></hk1>
      <hk2><button class="mybutton2"> <a href="ecompany.html"><I>BACK TO COMPANY</I></a>
            </button></hk2>
 <br><br> <br><br>
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
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$cid=$_POST["t1"];
$cname=$_POST["t2"];
$cphone=$_POST["t3"];
$caddress=$_POST["t4"];

$sql = "INSERT INTO ecompany VALUES ('$cid','$cname',$cphone,'$caddress')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>