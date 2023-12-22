<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 
$id = $_SESSION['s'];
 $ft1= $_POST["ft"];

if(isset($_POST['submit']))
{
    
    
    $filen= $_FILES['upload']['name'];
    $tmp= $_FILES['upload']['tmp_name'];

    $dotpos= strpos($filen,'.')+1;
    $f= substr($filen,$dotpos);




    $ft="Java ".$ft1;

    $fullname= $ft.".".$f;

    $uploc= "learnCourse_java/".$fullname;
   


   if(move_uploaded_file($tmp,$uploc))
   {
    $insert="INSERT INTO learn_java(filetitle,filename) VALUES('".$ft."','".$fullname."');";
    $query2=mysqli_query($con,$insert);
    if($query2)
    {
        header('Location:admin_learn_course_java.php');
    }
   }

}


?>


