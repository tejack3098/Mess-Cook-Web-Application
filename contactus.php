<?php
    require('db.php');
    

$status = "";
    if(isset($_POST['submit'])){
    $name =$_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message =$_REQUEST['message'];
    

$ins_query="insert into contactus (`name`,`email`,`message`) values ('$name','$email','$message')";
mysqli_query($con,$ins_query) or die(mysql_error());


    }

?>






<!DOCTYPE html>
<html>
<head>
    <title>FoodWastageSaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="icon.jpg" />
    <link type="text/css" rel="stylesheet" href="contactusCSS.css">
     <link type="text/css" rel="stylesheet" href="Common.css">
    </head>
    <body>
        
        <ul class="topnav">
          <li><a href="index.html">Home</a></li>
          <li><a href="Registration.php">Register</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><a class="active" href="contactus.php">Contact us</a></li>
          <li><a href="aboutus.php">About us</a></li>
        </ul>
    <div class="loginbox">
        <img src="avatar.jpg" class="avatar">
        <h1>Contact Us</h1>
        <div class="row">
        <div class="subbox1">
        <form action="" method="post" name="form">
           
            <p>Full Name</p>
            <input  type="text" name="name"  placeholder="Enter FuLL Name">
               
            
            <p>Email Id</p>
            <input  type="email" name="email"  placeholder="Enter Your Email Id">
                
            <p>Message</p>
            <textarea name="message" placeholder="Enter your Message"></textarea>
            <br><br><br>
            <input  type="submit" name="submit"  value="Submit">
       
        
        </form>
        </div>
        <div class="subbox2">
            <p>Email Id</p><br>
            <p style="">foodwastemanger@gmail.com</p><br><br>
            
            <p>Mobile Numbers</p><br>
            <p style="">+91-88793856XX<br>+91-77870146XX</p><br><br>
            
            <p>Address </p>
        
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d560.0340186553029!2d73.09038011577617!3d19.219437624086215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed8344dc78094a79!2sRasoi+Family+Restaurant!5e0!3m2!1sen!2sin!4v1534878002126" width="390px" frameborder="0" style="border:0" allowfullscreen></iframe>
     
        
        </div>
        </div>
        </div>
        <div class="footer">
    <p>Copyright © 2018 XYZ.</p>
    </div>
    </body>
 


</html>