

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

.column1 {
  float: left;
  width: 65%;
  padding: 10px;
  height: 550px; 
}

.column2 {
  float: left;
  width: 31.99%;
  padding: 10px;
  height: 550px; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

button {
  background-color:#643B70 ;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 10px 10px;
  cursor: pointer;
  
  
}

button {border-radius: 5px;}
button:hover {
  background-color: #A6A6A6;
}




input[type=number]{
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

tr:hover {background-color: whitesmoke;}


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
    <a href="admin_homepage_ucode.php"><img src="Code for life (2).png" alt="Site Name" /></a>
    
  </div>  
  
</div>

<div id="navbar">
  <a href="admin_homepage_ucode.php"><b>Home</b></a>
  <a href="admin_learn_course.php"><b>Course Materials</b></a>
  <a href="admin_preparation.php"><b>Preparation Materials</b></a>
  <a href="#"><b>Monthly Contest</b></a>
  <a href="#"><b>Active Contest</b></a>
  <a href="admin_notice.php"><b>Notice</b></a>
  <a href="admin_my_profile.php"><b>My Profile</b></a>
  <a href="ucode login.php" class="split"><b>Log Out</b></a>
</div>

<div class="content">

<form action="admin_java_my_prep.php" method="post">
  
    
    <button type="submit">Back</button>
   
  
</form>


<br><font color= "#643B70"><h1>Delete Question Here:</h1>
  <form action="admin_java_my_prep2.php" method="post">
  
  <label for="qno"></label>
    <input type="number"  name="qno" placeholder="Question No." required>
    
    <button type="submit">Delete</button>
   
  
</form>


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

$select="SELECT * FROM prep_java;";
$query=mysqli_query($con,$select);

if($query)
{
    echo'<table>';
    echo'<tr>';
    echo'<th>Question No.</th>';
    echo'<th>Question</th>';
    echo'<th>Option 1</th>';
    echo'<th>Option 2</th>';
    echo'<th>Option 3</th>';
    echo'<th>Option 4</th>';
    echo'<th>Answer</th>';
   
    echo'</tr>';
    if (mysqli_num_rows($query) > 0)

    {
       while($row= mysqli_fetch_assoc($query))

       {
        
          echo'<tr>';
          echo'<td>'.$row["no"].'</td>';
          echo'<td>'.$row["que"].'</td>';
          echo'<td>'.$row["c1"].'</td>';
          echo'<td>'.$row["c2"].'</td>';
          echo'<td>'.$row["c3"].'</td>';
          echo'<td>'.$row["c4"].'</td>';
          echo'<td>'.$row["ans"].'</td>';
          
          
          echo'</tr>';

       }
    }
    echo'</table>';

}




?>



