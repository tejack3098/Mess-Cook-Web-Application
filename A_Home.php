<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   <!-- <link type="text/css" rel="stylesheet" href="Common.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <style>
       body {
  margin: auto;
  background-image: url("mix.jpg"); 
  background-color:#fff2cc;
  height: 660px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
      background-attachment: fixed;
  position: relative;
  font-family: sans-serif;
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #ffc107;}

ul.topnav li a.active {background-color: #ffc107;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

        
        .inner_div{
            align-self: center;
          
            background: #ececec;/*rgb(255, 255, 255)*/
            text-align: left;
            width: 60%;
            margin-left: 20%;
            
            height: auto;
            
           
        }
        h4{
            font-weight: bold; 
            /*font-size: 12px; */
            color : #000;
            display: block;
            font-family: "Times New Roman", Times, serif;
            padding-top: 10px;
            /*padding-bottom: 10px;*/
            margin: 5%;
            margin-bottom: 10px;
            
        }
        #complaint{
            /*padding-top: 10px;*/
            padding-bottom: 10px;
            margin: 5%;
            margin-top: 10px;
            color: grey;
            font-style: italic;
            font-size: 20px;
            text-align: justify;

        }
        .main_div{
           
            width: 100%;
            height: 100%;
           
            /*overflow: scroll;*/
            
            margin-left: 0%;
            
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           height: 35px;
           background-color: #000;
           color: white;
           text-align: center;
        }
        
        #send_response{
            
        margin-left: 70%;
        margin-top: -4%;
        }
        
    </style>
</head>

<body>
    
    <ul class="topnav">
          <li><a href="A_Home.php">Home</a></li>
          <li><a href="aboutus.php">About us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <?php
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
            
            $sql = "SELECT * FROM contactus ORDER BY udated_at desc";
            $result = $conn->query($sql);
            echo "<div class='main_div'>";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    //print_r($row);
                    echo "<div class = 'inner_div'>";
                    echo "<h4>";
                    echo $row["email"];
                    echo "</h4>";
                    echo "<p id = 'complaint'>";
                    echo $row["message"];
                    echo "</p>";
                    echo"</div>";
                    echo "<button type='button' class='btn btn-warning' id = 'send_response'>";
                    echo "Send Response";
                    echo "</button>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
    
            echo "</div>";

    ?>
    
    <div class="footer">
       <p>Copyright © 2018 XYZ.</p>
    </div>
</body>
    
    <!--<script>
        function send_rsp(){
            
        
            document.getElementById("send_response").disabled = true;
            /*$().button('dispose')*/
            
        }
    
    </script>-->
    
    
</html>
