
<?php
$servername = "localhost";
$username = "root";
$password = "Test@1234";
$dbname = "Keerthana";

// Create connection
$conn = new mysqli($servername, $username , $password, $dbname) or die("Connect failed: %s\n". $conn -> error);



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"."<br>";


