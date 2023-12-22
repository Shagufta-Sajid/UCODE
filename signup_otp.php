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
a {
  text-decoration: none;
  color: #000;
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
  margin: -40px 10px -45px 10px;
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
  
.button {
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

.button {border-radius: 5px;}
.button:hover {
  background-color: #A6A6A6;
}



.column {
   
  float: left;
  width: 98%;
  padding: 15px;
}



form {border: 6px solid #643B70;
width: 25% ;
height: 50%;
margin: 50px 30px 0px 627px;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
  border-radius: 50%;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  
}

span.em {
  float: right;
  padding-top: 0px;
 
 
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 600px) {
  span.em {
     display: block;
     float: none;
     
  }
  
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
      <li><a href="#" style="color:#643B70;"><b>Leaderboard</b></a></li> 
      <li><a href="signup.php" style="color:#643B70;"><b>Go Back</b></a></li>
      <li>
         <a href="ucode login.php" class="button"><b>Login</b></a></li> 
      </li> 
    </ul>
  </nav>
</div>


<div class="column">
<form action="signup_otp1.php" method="post">
  <div class="imgcontainer">
    <img src="signup_pic.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="otp"><b>OTP</b></label>
    <input type="text" placeholder="Enter 6 Digits OTP." name="otp" required>

        
    <button type="submit">Confirm</button>

    
  </div>

  
    
  
</form>






</div>


<div class="footer">
<p><b>UCODE</b> - Powered By <b>Illusion</b></p>
</div>

  
</body>
</html>