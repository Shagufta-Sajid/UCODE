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



#navbar {
  overflow: hidden;
  background-color: #643B70;
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


table {

border-collapse: collapse;
border: 1px solid black;
width: 99%;
padding: 10px 32px;
margin: 40px 10px;

}

th, td {
padding: 7px;
text-align: center;
border-bottom: 1px solid black;
}

tr:hover {background-color: coral;}

.avatar {
  vertical-align: middle;
  width: 120px;
  height: 120px;
  border-radius: 50% ;
}

button {
  background-color: #643B70;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  font-size: 30px;
  border-radius: 10%;
}

button:hover {
  opacity: 0.8;
}

form {
width: 50% ;
height: 50%;
margin: auto;
text-align: center;
color: #643B70;

}
.container {
  padding: 16px;
  color: #643B70;
  text-align: center;
  
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
    <a href="user_homepage_ucode.php"><img src="Code for life (2).png" alt="Site Name" /></a>
    
  </div>  
  
</div>

<div id="navbar">
  <a href="user_homepage_ucode.php"><b>Home</b></a>
  <a href="user_learn_course.php"><b>Learn Courses</b></a>
  <a href="user_myprep.php"><b>My Preparation</b></a>
  <a href="#"><b>Monthly Contest</b></a>
  <a href="#"><b>Active Contest</b></a>
  <a href="#"><b>Notice</b></a>
  <a href="my_profile.php"><b>My Profile</b></a>
  <a href="ucode login.php" class="split"><b>Log Out</b></a>
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

<div class="footer">
        
        <p><b>UCODE</b> - Powered By <b>Illusion</b></p>
</div>



</body>
</html>


<?php

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 

$id = $_SESSION['s'];


  
    
   
   
  





$check= "SELECT participant_answer FROM prep_java1 WHERE id='".$id."' LIMIT 1 ;";
$Query= mysqli_query($con,$check);

if($Query)
{
    while($row= mysqli_fetch_assoc($Query))
    {
        
        
            echo'<form action="user_myprep_java_mark.php" >';                   
                    echo'<button type="submit">Back</button>';
            echo'</form>';
            
            echo'<table>';
            echo'<tr>';
            echo'<th>Question No.</th>';
            echo'<th>Question</th>';
            echo'<th>Option1</th>';
            echo'<th>Option2</th>';
            echo'<th>Option3</th>';
            echo'<th>Option4</th>';
            echo'<th>My Answer</th>';
            echo'<th>aa</th>';
            echo'<th>Correct Answer</th>';
            echo'<th>Point</th>';
            
            echo'</tr>';

            $check1= "SELECT no,question,o1,o2,o3,o4,participant_answer,wrong_or_right,answer,mark FROM prep_java1 WHERE id='".$id."';";
            $Query1= mysqli_query($con,$check1);
    


        
            
            while($row= mysqli_fetch_assoc($Query1))
            {
                echo'<tr>';
                echo'<td>'.$row["no"].'</td>';
                echo'<td>'.$row["question"].'</td>';
                echo'<td>'.$row["o1"].'</td>';
                echo'<td>'.$row["o2"].'</td>';
                echo'<td>'.$row["o3"].'</td>';
                echo'<td>'.$row["o4"].'</td>';
                echo'<td>'.$row["participant_answer"].'</td>';
                echo'<td>'.$row["wrong_or_right"].'</td>';
                echo'<td>'.$row["answer"].'</td>';
                echo'<td>'.$row["mark"].'</td>';           
                echo'</tr>';

            }
            echo'</table>';

    }
        
        
}
    




    
       


  
  






?>


































