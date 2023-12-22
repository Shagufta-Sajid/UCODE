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

table {
  border-collapse: separate;
  border-spacing: 85px 0;
 
}

td {
  padding: 25px 0;
}

.bar {
  background-color: #E0E0E0;
  padding: 10px 15px;
  margin: 1px 0;
  border: none;
  cursor: pointer;
  width: 90px;
  font-size: 18px;
  border-radius: 10%;
}

.bar a:hover {
  opacity: 0.8;
}

.midnav {
  overflow: hidden;
  background-color: white;
}
 #box{
    width: 250px;
    height: 250px;
    background-color: white;
    margin: 20% 0 0 35%;
}

/* Style the topnav links */
.midnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
}

.middnav {
  overflow: hidden;
  background-color: #CB6CE6;
}

/* Style the topnav links */
.middnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
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
    <h2><font color="#643B70">Upload Materials By Topics:</font></h2><br>
  <div class="column">
  <div class="middnav">
   <table>
     <tr>
       <td><img src="java.png" width=150" height="150" class="img-fluid"><br>
        <center><a href="admin_learn_course_java.php" class="bar"><font color="#643B70"><b>Java</b></font></a></center></td>
       <td><img src="sql.jpg" width="150" height="150" class="img-fluid"><br>
        <center><a href="#" class="bar"><font color="#643B70"><b>SQL</b></font></a></center></td>
        <td><img src="python.png" width="150" height="150" class="img-fluid"><br>
        <center><a href="#" class="bar"><font color="#643B70"><b>Python</b></font></a></center></td>
        <td><img src="c.png" width="150" height="150" class="img-fluid"><br>
        <center><a href="#" class="bar"><font color="#643B70"><b>C</b></font></a></center></td>
        <td><img src="php.png" width="150" height="150" class="img-fluid"><br>
        <center><a href="#" class="bar"><font color="#643B70"><b>PHP</b></font></a></center></td>
     </tr>
   </table>
</div>

</div>

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