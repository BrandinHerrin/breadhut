<?php
    // $host = "YOUR_DATABASE_HOST";
    // $username = "YOUR_DATABASE_USERNAME";
    // $password = "YOUR_DATABASE_PASSWORD";
    // $dbname = "YOUR_DATABASE_NAME";

    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "dailygrind_db";
  
    $conn = mysqli_connect($host, $username, $password, $dbname);
  
    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
?>