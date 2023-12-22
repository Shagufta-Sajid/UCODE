<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<style>

body {
  font-family: Helvetica;
  margin: 0;
 
}

.site-header { 
  border-bottom: 1px solid #ccc;
  padding: .5em 1em;
}

.site-header::after {
  content: "";
  display: table;
  clear: both;
}

.site-identity {
  float: left;
}
.site-identity img {
  max-width: 175px;
  float: left;
  margin: -40px 10px -45px 0px;
}

.site-navigation {
  float: right;
  font-size: 25px
  
}

.site-navigation ul, li {
  margin: 0; 
  padding: 0;
}

.site-navigation li {
  display: inline-block;
  margin: 0.2em 2em 0.5em 1em;
}

a:hover {
  background-color: #A6A6A6;
}



#navbar {
  overflow: hidden;
  background-color: #643B70;
  color: white;
  text-align: center;

   
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 20px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}



#navbar a.split {
  float: right;
  background-color:#B694BF;
  color: Whitesmoke;
  height:100%;
}
#navbar a.split:hover {
    background-color: red;
  color: white;
}



.content {
  padding: 16px;
 
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}





form {border: 6px solid #643B70;
width: 70% ;
height: 50%;
margin: auto;

}
.container {
  padding: 16px;
  
}


button {
  background-color: #643B70;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
  font-size: 30px;
  border-radius: 0%;
  text-align: center;
}

button:hover {
  opacity: 0.8;
}


.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #643B70;
   color: white;
   text-align: center;
}

</style>
</head>
<body>

<div class="site-header">
  <div class="site-identity">
    <a href="#"><img src="Code for life (2).png" alt="Site Name" /></a>  
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      
      <li>
         <a href="user_active_contest.php" class="button"><b>Leave The Contest</b></a> 
      </li> 
    </ul>
  </nav>
</div>

<div id="navbar">


<h2>Available Time<h2>
<h3 id="demo"></h3>
<script>
// Set the date we're counting down to
var c = new Date();
c.setMinutes(c.getMinutes()+45);
var countDownDate= c;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";

    
    window.location.href = "" ;
 




  }
}, 1000);
</script>
 
</div>

<div class="content">

</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>





</body>
</html>

<?php

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 
$id = $_SESSION['s'];

$select= "SELECT question,sample_input,sample_output FROM active_contest1 ORDER BY contest_no DESC LIMIT 1 ";
$query=mysqli_query($con,$select);

if($query)
{
    echo'<form action="user_active_contest_start1.php" method="post" enctype="multipart/form-data">';
  
  
  while($row= mysqli_fetch_assoc($query))
  {
   
    echo'<center>* '.$row["question"].'</center>';
    echo'<br><br>';
    echo'<center>Sample Input- '.$row["sample_input"].'</center>';
    echo'<br><br>';
    echo'<center>Sample Output- '.$row["sample_output"].'</center>';
    echo'<br><br>';
    
    echo'<center><h1><b>Submit your code file here:</b></h1></center>';
    echo'<center><input type="file"  name ="upcode" required></center><br><br>';
   
    
  }
  
  echo'<button type="submit" name="b1">Submit</button>';

  
  

   echo'</form><br>'; 

   include 'compiler/compiler.php';
  
   

}


?>




