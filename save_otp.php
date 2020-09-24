<?php
require'db.php';


function first($email, $otp){ 
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO otp_ver (email, otp) VALUES (?, ?)");
    $stmt->bind_param("si", $email1, $otp1);

    // set parameters and execute
    $email1 = $email;
    $otp1 = $otp;
    
    $stmt->execute();
      
    //echo "New records created successfully";

    $stmt->close();
    $conn->close();
    
  }
?>