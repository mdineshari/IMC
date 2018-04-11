<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "imc";

$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM startups ORDER BY 'id' DESC LIMIT 4";
$result = $conn->query($sql);


if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
while ($row=mysqli_fetch_row($result))
  {
        echo "<div class=\"cells\"><img src='api/uploads/$row[6]' height='60px' width='150px'></div>";
  }
// Free result set
mysqli_free_result($result);
}
$conn->close();
?>