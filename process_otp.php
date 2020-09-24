<?php
$u_email = $_GET["q"];
;
session_start();
//$rndno=rand(100000, 999999);//OTP generate



	
require_once 'sendMailD.php';
$mailF = new sendMailD();


    try
    {
		$userOtpRCode = rand(100000, 999999);
		$userEmail = $u_email; //email id of recevr
        
       $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodwastagesaver";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO otp_ver (email, otp) VALUES (?, ?)");
    $stmt->bind_param("si", $email1, $otp1);

    // set parameters and execute
    $email1 = $userEmail;
    $otp1 = $userOtpRCode;
    
    $stmt->execute();
      
    //echo "New records created successfully";

    $stmt->close();
    $conn->close();
        
        
            	$message= "
                           Hello , $userEmail
                           <br /><br />
                           We got request to register your email id for.If you have requested  then use the one time verfification code to verify your email id, if not just ignore this email,
                           <br /><br />
                           Your one time verification code is  $userOtpRCode
                           <br /><br />
                           
                           <br /><br />
                           Thank you 
                           <br /><br />
                           PCE 
                           ";
                        $subject = "User verification";
                
                        $retv = $mailF->sendMail($userEmail,$message,$subject);

                        if($retv == "OK"){
                           
				            echo "Mail sent!";
               

                        }
                        else {
                           echo "Mail not sent!";
                        }
            

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


?>