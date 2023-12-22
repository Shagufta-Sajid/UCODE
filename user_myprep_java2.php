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
         <a href="user_myprep.php" class="button"><b>Leave The Quiz</b></a> 
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
c.setMinutes(c.getMinutes()+13);
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

    
    window.location.href = "user_myprep_java3.php" ;
 




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

$select= "SELECT no,question,o1,o2,o3,o4 FROM prep_java1 WHERE id ='".$id."';";
$query=mysqli_query($con,$select);

if($query)
{
  echo'<form action="user_myprep_java3.php" method="post">';
  
  while($row= mysqli_fetch_assoc($query))
  {
    echo'<div class="container">';  
   
   echo' <p>'.$row["no"].') '.$row["question"].'</p>';
   echo'<input type="radio" id="'.$row["no"].'" name="'.$row["no"].'" value= "'.$row["o1"].'" required>';
   echo'<label>'.$row["o1"].'</label><br>';
   
   echo'<input type="radio" id="'.$row["no"].'" name="'.$row["no"].'" value= "'.$row["o2"].'">';
   echo'<label>'.$row["o2"].'</label><br>';

   echo'<input type="radio" id="'.$row["no"].'"  name="'.$row["no"].'" value= "'.$row["o3"].'">';
   echo'<label>'.$row["o3"].'</label><br>';

   echo'<input type="radio" id="'.$row["no"].'" name="'.$row["no"].'" value= "'.$row["o3"].'">';
   echo'<label>'.$row["o4"].'</label><br>';
   echo'</div>';
  

  }
  echo'<button type="submit">Submit</button>';
  

   echo'</form>'; 
}


?>




