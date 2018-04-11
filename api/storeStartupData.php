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
echo $_FILES["companyLogo"];
$target_file = $target_dir . basename($_FILES["companyLogo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["companyLogo"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["companyLogo"]["name"]). " has been uploaded.";
} else {
      echo "Sorry, there was an error uploading your file.";
}

$image=basename( $_FILES["companyLogo"]["name"]); // used to store the filename in a variable
$companyName = $_POST['companyName'];
$tagline = $_POST['tagline'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$theme = $_POST['theme'];
$description = $_POST['description'];
$companyLogo = $_POST['companyLogo'];
$email = $_POST['email'];

$sql = "INSERT INTO startups (Company_Name,Tagline,City,Phone,Website,Theme,Description,Company_Logo,Email) VALUES ('$companyName', '$tagline', '$city', '$phone', '$website', '$theme', '$description', '$image', '$email')";
if ($conn->query($sql) === TRUE) {
      if($companyName !=''&& $theme !='' && $image !='' && $email !='') {
            echo "Success";
            //header("Location:http://www.ivalley.info/IMC");
      } else {
            echo "Warning";
      }
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}
?>