<?php

include('./admin_notice1.php');
if(isset($_POST['submit'])){
    $notices=$_POST['notices'];
    $image=$_FILES['file'];

 
    $imagefilename = $image['name'];
    
    $imagefileerror=$image['error'];
   

    $imagefiletemp=$image['tmp_name']; 
    

    $filename_separate=explode('.',$imagefilename);
    


    $file_extension=(end($filename_separate));
   

    $extension=array('jpeg','jpg','png','PNG','PDF','pdf','docx','pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif', 'pptx');

    if(in_array($file_extension,$extension)){

        $upload_image='images/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into `notice` (notices,image) 
        values('$notices','$upload_image')";

        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
             <strong>Success</strong>Data inserted succesfully
          </div>';
          
        }else{
              die(mysqli_error($con));
        }
    }

    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

input[type=text] {
  width: 400px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: whitesmoke;
  background-image: url("Hnet.com-image.png");
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  transition: width 0.4s ease-in-out;
  padding: 10px 32px;
  margin: 12px 0px ;
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


button {
  background-color: #643B70;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  font-size: 15px;
  border-radius: 10%;
}

button:hover {
  opacity: 0.8;
}
img{
            width:200px;
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
  <a href="admin_notice2.php"><b>Notice</b></a>
  <a href="admin_my_profile.php"><b>My Profile</b></a>
  <a href="ucode login.php" class="split"><b>Log Out</b></a>
</div>
   <h1 class="text-center my-3"> Type Notice Here </h1>
   <div class="container d-flex justify-content-center">
     <form action="user_notice.php" method="post" class="w-50" enctype="multipart/form-data">
       <div class="form-group my-4">
        <textarea rows="10" cols="100" name="notices" placeholder="Type your notice" class="form-control">
        </textarea>
        </div>
        <div class="form-group">
        <label for="file">Select a File </label>
        <input type="file" name="file"class="form-control">
        </div>
        <button type="submit" name="submit">Submit</button>
      </form> 
    </div>  
    <br>
    <div class="content">
    <h1 class="text-center my-4">Notice Board</h1>
    <div class="container mt-5 d-flex justify-content-center">
<table class="table table-bordered w-70 h-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">Notice No</th>
      <th scope="col">Notices</th>
      <th scope="col">Date Of Publish</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $sql= "select * from `notice`";
    $result=mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['notice_id'];
        $notices=$row['notices'];
        $date=$row['notice_date'];
        $image=$row['image'];
        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$notices.'</td>
        <td>'.$date.'</td>
        <td><img src ='.$image.' ></td>
        <td><a href="notice_download.php? file=<?php echo $file=$row '.$image.'; ?>">Download</a><br></td>
        
      </tr>';


    }
   

    ?>
    
   
  </tbody>
</table>


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