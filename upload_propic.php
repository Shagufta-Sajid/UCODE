<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 
$id = $_SESSION['s'];

if(isset($_POST['submit']))
{
    
    $filename= $_FILES['upfile']['name'];
    $tmp= $_FILES['upfile']['tmp_name'];
    $fullname= $id."_".$filename;

    $uploc= "images/".$fullname;
   


   if(move_uploaded_file($tmp,$uploc))
   {
    $insert="UPDATE ucode_info SET image='".$fullname."' WHERE id='".$id."';";
    $query2=mysqli_query($con,$insert);
    if($query2)
    {
        header('Location:pic_upload_done.php');
    }
   }

}


?>


