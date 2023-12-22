<?php


$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database);

$q= $_POST['que'];
$o1= $_POST['o1'];
$o2= $_POST['o2'];
$o3= $_POST['o3'];
$o4= $_POST['o4'];
$a= $_POST['ans'];

$insert= "INSERT INTO prep_java(que,c1,c2,c3,c4,ans) VALUES( '".$q."','".$o1."','".$o2."','".$o3."','".$o4."','".$a."');";

$query=mysqli_query($con,$insert);
if($query)
{
    header('Location:admin_java_my_prep.php');
}




?>