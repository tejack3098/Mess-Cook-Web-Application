


<!DOCTYPE html>
<html>
<head>
    <title>FoodWastageSaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="icon.jpg" />
    <link type="text/css" rel="stylesheet" href="LoginCSS.css">
    <link type="text/css" rel="stylesheet" href="Common.css">
    
    </head>
    <body>
        <ul class="topnav">
          <li><a href="index.html">Home</a></li>
       

            <li><a class="active" href="A_Login.php">Admin Login</a></li>
          <li><a  href="contactus.php">Contact us</a></li>
          <li><a href="A_Registration.php">Admin Registration</a></li>
            <li><a href="aboutus.php">About us</a></li>
        </ul>
        <?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = $_REQUEST['email']; 
		
		$password = $_REQUEST['password'];
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `a_register` WHERE email='$email' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			header("Location: A_Home.php"); // Redirect user to index.php
            }else{
				echo "<div class='loginbox'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='A_Login.php'>Login</a></div>";
				}
    }else{
        
?>
    <div class="loginbox">
        <img src="avatar.jpg" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="post" name="login">
            <p>Email Id </p>
            <input  type="email" name="email"  placeholder="Enter Email Id"  required>
            <p>Password</p>
            <input  type="password" name="password"  placeholder="Enter Password"  required>
            <input  type="submit" name="submit"  value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="A_Registration.php">Don't have an account?</a>

        </form>
        </div>
        <div class="footer">
    <p>Copyright © 2018 XYZ.</p>
    </div>
<?php } ?>
    </body>
 


</html>