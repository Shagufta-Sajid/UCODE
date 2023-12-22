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
  margin: 0px 0px 0px 18px;
  padding: 16px ;
  width: 98%;
  border: 1px solid #643B70;
  background-color:#B694BF ;
  font-size: 25px;
  color: #643B70;
}

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
  width: 100%;
  font-size: 20px;
  border-radius: 10%;
}

button:hover {
  opacity: 0.8;
}
form {
width: 45% ;
height: 50%;
margin: auto;
text-align: center;
color: #643B70;

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
// echo'<form action="user_myprep_java.php" >  '; 
//  echo' <button type="submit"><b>Go Back</b></button>';
// echo'</form>';

$select="SELECT no,answer,participant_answer FROM prep_java1 WHERE id='".$id."';";
$q= mysqli_query($con,$select);

if($q)
{
    while($row= mysqli_fetch_assoc($q))
    {
        $no= $row["no"];
        $answer= $row["answer"];
        $p_answer= $row["participant_answer"];
        
        if($answer==$p_answer)
        {
            $update="UPDATE prep_java1 SET mark=1,wrong_or_right='Correct Answer' WHERE no=".$no." AND id='".$id."';";
            $q0= mysqli_query($con,$update);
        }
        else
        {
            $update="UPDATE prep_java1 SET mark=0,wrong_or_right='Wrong Answer' WHERE no=".$no." AND id='".$id."';";
            $q0= mysqli_query($con,$update);
        }
    }
}

$select1="SELECT SUM(mark) AS sum FROM prep_java1 WHERE id='".$id."';";
$q1= mysqli_query($con,$select1);

if($q1)
{
    while($row= mysqli_fetch_assoc($q1))
    {
        $sum=$row["sum"];
        $pro= ($sum/12)*100;
        $progress=round($pro);


        $select2="SELECT COUNT(mark) AS r FROM prep_java1 WHERE mark=1 AND id='".$id."';";
        $q2= mysqli_query($con,$select2);

        if($q2)
        {
            while($row= mysqli_fetch_assoc($q2))
            {
                $right= $row["r"];
                $select3="SELECT COUNT(mark) AS w FROM prep_java1 WHERE mark=0 AND id='".$id."';";
                $q3= mysqli_query($con,$select3);
                if($q3)
                {
                    while($row= mysqli_fetch_assoc($q3))
                    {
                        $wrong= $row["w"];
                        echo'<form>';
                        echo'<h1>Preparation Progress: '.$progress.'%<h1>';
                        echo'<h2>Total Correct Answers: '.$right.'<h2>';
                        echo'<h2>Total Wrong Answers: '.$wrong.'<h2>';

                        echo'</form>';
                        
                    }
                }

            }
            
        }


        

    }

}
echo'<br>';
echo'<br>';
echo'<br>';
echo'<form action="user_myprep_java_que_ans.php" >  '; 
 echo' <button type="submit"><b>See All Questions & Answers</b></button>';
echo'</form>';



?>

