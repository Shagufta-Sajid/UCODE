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
form {border: 6px solid #643B70;
width: 25% ;
height: 50%;
margin: Auto;

}

 input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
  width: 100%;
  font-size: 30px;
  border-radius: 10%;
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
    <a href="user_homepage_ucode.php"><img src="Code for life (2).png" alt="Site Name" /></a>
    
  </div>  
  
</div>

<div id="navbar">
  <a href="user_homepage_ucode.php"><b>Home</b></a>
  <a href="#"><b>Learn Courses</b></a>
  <a href="#"><b>My Preparation</b></a>
  <a href="#"><b>Monthly Contest</b></a>
  <a href="#"><b>Active Contest</b></a>
  <a href="#"><b>Notice</b></a>
  <a href="my_profile.php"><b>My Profile</b></a>
  <a href="ucode login.php" class="split"><b>Log Out</b></a>
</div>

<div class="content">
<form action="user_change_pass2.php"  method="post">
  

  <div class="container">
    <label for="cpass"><b>Current Password:</b></label>
    <input type="password" placeholder="Enter your current password" name="cpass" required>

    <label for="newpass"><b>New Password:</b></label>
    <input type="password" placeholder="Enter new password" name="newpass" required>

    <label for="newcpass"><b>Confirm New Password:</b></label>
    <input type="password" placeholder="Enter new password again" name="newcpass" required>
        
    <button type="submit">Confirm</button>
  </div>

  
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




