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

      $sql = "SELECT * FROM themes";
      $result = $conn->query($sql);


      if ($result=mysqli_query($conn,$sql)) {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result)) {
                  echo "<option>$row[1] - $row[2]</option>";
            }
            // Free result set
            mysqli_free_result($result);
      }
      $conn->close();
?>