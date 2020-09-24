


<!DOCTYPE html>
<html>
<head>
    <title>RASOI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="icon.jpg" />
<link type="text/css" rel="stylesheet" href="HomeCSS2.css">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<div class="sidebar">
  <a class="active" href="Home.php">Dashboard</a>
  <a href="#news">Weekly Planar</a>
  <a href="contactus.php">Contact us</a>
  <a href="aboutus.php">About us</a>
  <a href="index.html">Log out</a>
</div>
    

<div class="content">

<?php
    //$breakfast = $_GET("break");
    //echo $breakfast;
    $obj1 = $_GET["break"];
    $obj = json_decode($obj1);
    $array = get_object_vars($obj);
    print_r($array);
    echo "<style type='text/css'>
      table{
        border-collapse: collapse;
        width: 100%;
      }
      td{
      border: 1px solid black;
      height: 25px; 
      }
      th{
       background-color: #4CAF50;
        color: white;
      }
      tr:nth-child(even) {background-color: #f2f2f2;}
      caption{
        margin: 0;
        font-family: cursive;
        color: Black;
        text-align: center;
        font-weight: bold;
        font-size: 20px;
      }
      </style>";
   $mysqli = new mysqli("localhost", "root", "", "foodwastagesaver");
   if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
    else {
         echo "Connected successfully <br>";
    }
    
    //$break =array();
    $menu = array("Misal Pav","Pohe", "Omlet Pav", "Pav Bhaji");
    echo '<table style = "border: 5px groove">';
    echo "<caption>Breakfast</caption>"; 
    echo "<tr>";
    foreach($array as $x => $x_value){
        
    
   /* for($x = 0; $x < count($menu); $x++){*/
    //echo "Iteration",$x,"<br>";
    $sql = "SELECT * FROM break where Name ='$x'";
    //echo $sql;
    $result = $mysqli->query($sql);
    echo '<td style = "border: 5px groove">';
    echo "<table>";
    echo "<caption>$x</caption>";
    echo "<th>Ingredients</th>";
    echo "<th>Quantity</th>";
    for($i = 0; $i < mysqli_num_fields($result); $i++) {
        while($row = mysqli_fetch_row($result)){
             foreach($row as $_column){
               $field_info = mysqli_fetch_field($result);
                if ($_column > 0){
                //$number1 = 0;$number2 = 0;
                $number1 = floatval($_column);
                $number2 = $number1 * $x_value;
                //echo $number2;
                $_column = str_replace("$number1","$number2","$_column");
                //$_column = $_column * 10;
                echo "<tr>";
                echo "<td>{$field_info->name}</td>";
                echo "<td>{$_column}</td>";
                echo "</tr>";
         }
        }
        }
       
    }  
       echo "</td>";
       echo "</table>";
    }
    
    echo "</tr>";
    echo "</table>";
?>
    </div>   
    
<div class="footer">
    <p>Copyright © 2018 XYZ.</p>
</div>

    </body>
</html>