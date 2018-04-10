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

$sql1 = $conn->query("SELECT COUNT(*) FROM startups");
$row = $sql1->fetch_row();
$count = $row[0];
echo $count;
$conn->close();
?>