<?php
    require('db.php');
   

$status = "";
    if(isset($_POST['submit'])){
    $fname =$_REQUEST['fname'];
    $mname = $_REQUEST['mname'];
    $lname =$_REQUEST['lname'];
    $pnumber = $_REQUEST['pnumber'];
    $password =$_REQUEST['password'];
    $org = $_REQUEST['org'];
    $address =$_REQUEST['address'];
    $email = $_REQUEST['email'];
    $otp = $_REQUEST['otp'];
   
  
        
     
  
$ins_query="insert into c_register (`fname`,`mname`,`lname`,`pnumber`,`password`,`org`,`address`,`email`) values ('$fname','$mname','$lname','$pnumber','$password','$org','$address','$email')";
mysqli_query($con,$ins_query) or die(mysql_error());


    
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>FoodWastageSaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="RegistrationCSS.css">
     <link type="text/css" rel="stylesheet" href="Common.css">
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <ul class="topnav">
          <li><a href="index.html">Home</a></li>
          <li><a class="active" href="Registration.php">Register</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><a href="contactus.php">Contact us</a></li>
          <li><a href="aboutus.php">About us</a></li>
        </ul>
    <div class="registerbox">
        <img src="avatar.jpg" class="avatar">
        <h1>Register Here</h1>
        <form name="form" method="post" action="">
            <div class="row">
                <div class="col-33">
            <p>First Name</p>
            <input  type="text" name="fname"  placeholder="Enter First Name"  required >
                </div>
                <div class="col-33">
            <p>Middle Name</p>
            <input  type="text" name="mname"  placeholder="Enter Middle Name"  required>
                </div>
                <div class="col-33">
            <p>Last Name</p>
            <input  type="text" name="lname"  placeholder="Enter Last Name"  required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-33">
            <p>Phone Number</p>
            <input  type="number" name="pnumber"  placeholder="Enter Phone Number"  required>
                </div>
                
                <div class="col-33">
            <p>Create Password</p>
            <input  type="text" name="password"  placeholder="Enter Password"  required>
                </div>  

                <div class="col-33">
            <p>College/ORG Name</p>
            <input  type="text" name="org"  placeholder="Enter College/ORG Name"  required>
                </div>
            </div>
            
            <p>Address</p>
            <input  type="text" name="address"  placeholder="Enter Your Address"  required>
            
            <div class="row">
                <div class="col-50">
            <p>Email Id</p>
            <input  type="email" name="email"  id ="txtEmail" placeholder="Enter Your Email Id" onchange="Javascript:validate_email();"  required>
                </div>
                <div class="col-50">
            <p>OTP</p>
            <input  type="text" name="otp"  placeholder="Enter OTP"  required>
                </div>
            </div>
            
            <input  type="submit" name="submit"  value="Register">
            <a href="#">Resend OTP?</a>
            <a href="Login.html">Have an Account?</a><br>

        </form>
        </div>
        <div class="footer">
    <p>Copyright © 2018 XYZ.</p>
    </div>
    </body>
    

 
<script language="javascript">
        function validate_email() {
            var xmlhttp = new XMLHttpRequest();

            var email = document.getElementById('txtEmail');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email.value)) {
                alert('Please provide a valid email address');
                email.focus;
                return false;
            }
            else{
                value = $("#txtEmail").val(); 
                console.log(value);
               
                  var dataString = 'q=' +value;

                  $.ajax({
                    type: "GET",
                    url: "process_otp.php",
                    data: dataString,
                    cache: false,
                    success: function(responce){
                      //check if what response is   
                        console.log(responce)
                        alert(responce);
                    } 
                  });
            
                
            }
        }
    
    
    
    </script>

</html>