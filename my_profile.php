
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



button {
  background-color: #643B70;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  font-size: 15px;
  border-radius: 10%;
}

button:hover {
  opacity: 0.8;
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
  width: 70%;
  padding: 10px;
  height: 300px; 
}

.column2 {
  float: left;
  width: 26.95%;
  padding: 10px;
  height: 300px; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
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
  
   <div class="row">
  <div class="column1" style="background-color:#aaa;">
   <font color= "#643B70"><h1>Upload/Change Profile Picture Here:</h1>
        <h3>*File types - (jpg,jpeg,png)</h3>

<form action="upload_propic.php" method="post" enctype="multipart/form-data">
 
  
   
    <input type="file" accept="image/png, image/gif, image/jpeg" name ="upfile" required>
        
    <button type="submit" name=submit>Upload</button>
 
</form>

  </div>


  <div class="column2" style="background-color:#bbb;">
    <font color= "#643B70"><h1>Click Here For change Password:</h1>
  <form action="user_change_pass1.php" method="post">
        
    <button type="submit">Change Password</button>
 
</form>
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
  } else {o
    navbar.classList.remove("sticky");
  }
}
</script>

<div class="footer">
        
        <p><b>UCODE</b> - Powered By <b>Illusion</b></p>
</div>



</body>
</html>






