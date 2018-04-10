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
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["companyLogo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["companyLogo"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["companyLogo"]["name"]). " has been uploaded.";
} else {
      echo "Sorry, there was an error uploading your file.";
}

$image=basename( $_FILES["companyLogo"]["name"]); // used to store the filename in a variable
$name = $_POST['name'];
$contactnumber = $_POST['contactnumber'];
$company = $_POST['company'];
$website = $_POST['website'];
$location = $_POST['location'];

$sql = "INSERT INTO startups (name, contactnumber,company,website,location,companyLogo) VALUES ('$name', '$contactnumber', '$company', '$website', '$location', '$image')";
if($name ==''|| $company =='' && $image== '') {
      echo 'Please enter required fields';
}
else if ($conn->query($sql) === TRUE) {
      if($name !=''&& $company !='' && $image !='') {
            header("Location:http://www.ivalley.info/IMC");
      }
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}
?>