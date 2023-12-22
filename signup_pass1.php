<?php
session_start();
$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database);

$ID = $_SESSION['i'];

$p1= md5($_POST['pass1']);
$p2=md5($_POST['pass2']);

if($p1==$p2)
{
    $update= "UPDATE ucode_info SET pass='".$p1."' WHERE id='".$ID."';";
    $query= mysqli_query($con,$update);
    if($query)
    {
        header('Location: signup_successfully.php');


    }
    

}
else
{
    header('Location: signup_pass.php');
}



?>php
