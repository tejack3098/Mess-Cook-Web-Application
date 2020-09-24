


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
    <h2>Weekly Planner</h2>
    
    <div class="table-responsive">
    <table class="table table-striped table-bordered" style=" " >
    <thead>
        <tr>
        <th> Day</th>
        <th> Breakfast</th>
        <th> Lunch</th>
        <th> Dinner</th>
        
        </tr>
    </thead>
    <tbody>
        <tr>
        <td rowspan="2"> Monday</td>
        <td> <select name="b" id="bm">
            <option value ="misalpav">Misal Pav</option>
            <option value ="pavbhaji">Pav Bhaji</option>
            <option value ="pohe">Pohe</option>
            <option value ="omletpav">Omlet Pav</option>
            </select></td>
        <td> <select name="l"  id="lm">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        <td> <select name="d"   id="dm">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
            
     
   
        </tr>

        <tr>
             <td> <input type="number" value="20" id="cbm"></td>
              <td> <input type="number" value="20" id="clm"></td>
               <td> <input type="number" value="20" id="cdm"></td>
        </tr>

        <tr>
        <td rowspan="2"> Tuseday</td>
        <td> <select name="b" id="bt" >
            <option value ="misalpav">Misal Pav</option>
            <option value ="pavbhaji">Pav Bhaji</option>
            <option value ="pohe">Pohe</option>
            <option value ="omletpav">Omlet Pav</option>
            </select></td>
        <td> <select name="l" id="bt">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        <td> <select name="d" id="bt">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
       
        </tr>

           <tr>
             <td> <input type="number" value="20" id="cbt"></td>
              <td> <input type="number" value="20" id="clt"></td>
               <td> <input type="number" value="20" id="cdt"></td>
        </tr>

        <tr>
        <td rowspan="2"> Wednesday</td>
        <td> <select name="b" id="bw">
            <option value ="misalpav">Misal Pav</option>
            <option value ="pavbhaji">Pav Bhaji</option>
            <option value ="pohe">Pohe</option>
            <option value ="omletpav">Omlet Pav</option>
            </select></td>
        <td> <select name="l" id="lw">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        <td> <select name="d" id="dw">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
       
        </tr>

        <tr>
             <td> <input type="number" value="20" id="cbw"></td>
              <td> <input type="number" value="20" id="clw"></td>
               <td> <input type="number" value="20" id="cdw"></td>
        </tr>

        <tr>
        <td rowspan="2"> Thursday</td>
        <td> <select name="b" id="bh">
            <option value ="misalpav">Misal Pav</option>
            <option value ="pavbhaji">Pav Bhaji</option>
            <option value ="pohe">Pohe</option>
            <option value ="omletpav">Omlet Pav</option>
            </select></td>
        <td> <select name="l" id="lh">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        <td> <select name="d" id="dh">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
      
        </tr>
           <tr>
             <td> <input type="number" value="20" id="cbh"></td>
              <td> <input type="number" value="20" id="clh"></td>
               <td> <input type="number" value="20" id="cdh"></td>
        </tr>

        <tr>
        <td rowspan="2"> Friday</td>
        <td> <select name="b" id="bf">
            <option value ="misalpav">Misal Pav</option>
            <option value ="pavbhaji">Pav Bhaji</option>
            <option value ="pohe">Pohe</option>
            <option value ="omletpav">Omlet Pav</option>
            </select></td>
        <td> <select name="l" id="lf">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        <td> <select name="d" id="df">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        
        </tr>
        <tr>
             <td> <input type="number" value="20" id="cbf"></td>
              <td> <input type="number" value="20" id="clf"></td>
               <td> <input type="number" value="20" id="cdf"></td>
        </tr>

        <tr>
        <td rowspan="2"> Saturday</td>
        <td> <select name="b" id="ba">
            <option value ="misalpav">Misal Pav</option>
            <option value ="pavbhaji">Pav Bhaji</option>
            <option value ="pohe">Pohe</option>
            <option value ="omletpav">Omlet Pav</option>
            </select></td>
        <td> <select name="l" id="la">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        <td> <select name="d" id="da">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
       
       
        </tr>
           <tr>
             <td> <input type="number" value="20" id="cba"></td>
              <td> <input type="number" value="20" id="cla"></td>
               <td> <input type="number" value="20" id="cda"></td>
        </tr>

        <tr>
        <td rowspan="2"> Sunday</td>
        <td> <select name="b" id="bs">
            <option value ="misalpav">Misal Pav</option>
            <option value ="pavbhaji">Pav Bhaji</option>
            <option value ="pohe">Pohe</option>
            <option value ="omletpav">Omlet Pav</option>
            </select></td>
        <td> <select name="l" id="ls">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
        <td> <select name="d" id="ds">
            <option value ="halfthali">Half Thali(Chapati Bhaji)</option>
            <option value ="fullthali">Full Thali</option>
            <option value ="chickenbiryani">Chicken Biryani</option>
            <option value ="vegpulav">Veg Pulav</option>
            </select></td>
  
        
        </tr>
           <tr>
             <td> <input type="number" value="20" id="cbs"></td>
              <td> <input type="number" value="20" id="cls"></td>
               <td> <input type="number" value="20" id="cds"></td>
        </tr>
        
        
        
        </tbody>
    
    
    
    
    </table>
        </div>
    <div style="text-align: center; padding-top: 10px">
        <input  type="submit" name=""  value="Get Ingredients"  onclick="myFunction()">
         <img src="srcoll.gif" class="srcoll">
        </div>
     
    
   
    
    
    
    
    
    
    
    
    
    </div>


<div class="footer">
    <p>Copyright © 2018 XYZ.</p>
</div>
    
    
<script>
function myFunction(){
    
    //breakfast menu variables
    var bm = document.getElementById("bm").value;
    var bt = document.getElementById("bt").value;
    var bw = document.getElementById("bw").value;
    var bh = document.getElementById("bh").value;
    var bf = document.getElementById("bf").value;
    var ba = document.getElementById("ba").value;
    var bs = document.getElementById("bs").value;
    
    //breakfast count variables
    var cbm = document.getElementById("cbm").value;
    var cbt = document.getElementById("cbt").value;    
    var cbw = document.getElementById("cbw").value;
    var cbh = document.getElementById("cbh").value;
    var cbf = document.getElementById("cbf").value;
    var cba = document.getElementById("cba").value;
    var cbs = document.getElementById("cbs").value;
    
    
    
    //lunch menu variables
    var lm = document.getElementById("lm").value;
    var lt = document.getElementById("lt").value;
    var lw = document.getElementById("lw").value;
    var lh = document.getElementById("lh").value;
    var lf = document.getElementById("lf").value;
    var la = document.getElementById("la").value;
    var ls = document.getElementById("ls").value;
    
    //lunch count variables
    var clm = document.getElementById("clm").value;
    var clt = document.getElementById("clt").value;
    var clw = document.getElementById("clw").value;
    var clh = document.getElementById("clh").value;
    var clf = document.getElementById("clf").value;
    var cla = document.getElementById("cla").value;
    var cls = document.getElementById("cls").value;
   
    
    //dinner menu variables
    var dm = document.getElementById("dm").value;
    var dt = document.getElementById("dt").value;
    var dw = document.getElementById("dw").value;
    var dh = document.getElementById("dh").value;
    var df = document.getElementById("df").value;
    var da = document.getElementById("da").value;
    var ds = document.getElementById("ds").value;
    
    //dinner count variables
    
    var cdm = document.getElementById("cdm").value;
    var cdt = document.getElementById("cdt").value;
    var cdw = document.getElementById("cdw").value;
    var cdh = document.getElementById("cdh").value;
    var cdf = document.getElementById("cdf").value;
    var cda = document.getElementById("cda").value;
    var cds = document.getElementById("cds").value;
       
    var breakfirst = {};
    breakfirst["Misal Pav"] = 0;
    breakfirst["Pav Bhaji"] = 0;
    breakfirst["Pohe"] = 0;
    breakfirst["Omlet Pav"] = 0;
    
    var b = [bm,bt,bw,bh,bf,ba,bs];
    var v = [cbm,cbt,cbw,cbh,cbf,cba,cbs];
    
    for (index = 0; index < b.length; index++) { 
        if (b[index] == "misalpav"){
            a = Number(v[index]);
            breakfirst["Misal Pav"] += a;
            
            console.log(a);
        }
        
        else if (b[index] == "pavbhaji"){
            a = Number(v[index]);
            breakfirst["Pav Bhaji"] += a;
            
            console.log(a);
        }
        
        else if (b[index] == "pohe"){
            a = Number(v[index]);
            breakfirst["Pohe"] += a;
            
            console.log(a);
        }
        
        else if (b[index] == "omletpav"){
            a = Number(v[index]);
            breakfirst["Omlet Pav"] += a;
            
            console.log(a);
        }
    }
    console.log(breakfirst);
    //alert("misalpav:"+breakfirst["misalpav"]+"pavbhaji:"+breakfirst["pavbhaji"]+"pohe:"+breakfirst["pohe"]+"omletpav:"+breakfirst["omletpav"]);
    //var c = JSON.stringify(breakfirst);
    //window.location.href = "Home4.php?break="+c;
    //window.open("Home4.php?break="+c);
    /*b.forEach(count);
    function count(item,index){
        if(item == "misalpav"){
            a = "cb"+index;
            console.log(a);
            //console.log("click");
        }
        //console.log(item);
    }*/
   
    
    var myJSON = JSON.stringify(breakfirst)
    window.location.href = "output.php?break="+myJSON;
    
    
    
}
</script>
</body>
</html>