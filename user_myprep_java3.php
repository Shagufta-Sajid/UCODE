<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 

$id = $_SESSION['s'];

$a1 = $_POST['1'];
$a2 = $_POST['2'];
$a3 = $_POST['3'];
$a4 = $_POST['4'];
$a5 = $_POST['5'];
$a6 = $_POST['6'];
$a7 = $_POST['7'];
$a8 = $_POST['8'];
$a9 = $_POST['9'];
$a10 = $_POST['10'];
$a11 = $_POST['11'];
$a12 = $_POST['12'];

$i1= "UPDATE prep_java1 SET participant_answer='".$a1."' WHERE no=1 AND id='".$id."';";
$q1=mysqli_query($con,$i1);

$i2= "UPDATE prep_java1 SET participant_answer='".$a2."' WHERE no=2 AND id='".$id."';";
$q2=mysqli_query($con,$i2);

$i3= "UPDATE prep_java1 SET participant_answer='".$a3."' WHERE no=3 AND id='".$id."';";
$q3=mysqli_query($con,$i3);

$i4= "UPDATE prep_java1 SET participant_answer='".$a4."' WHERE no=4 AND id='".$id."';";
$q4=mysqli_query($con,$i4);

$i5= "UPDATE prep_java1 SET participant_answer='".$a5."' WHERE no=5 AND id='".$id."';";
$q5=mysqli_query($con,$i5);

$i6= "UPDATE prep_java1 SET participant_answer='".$a6."' WHERE no=6 AND id='".$id."';";
$q6=mysqli_query($con,$i6);

$i7= "UPDATE prep_java1 SET participant_answer='".$a7."' WHERE no=7 AND id='".$id."';";
$q7=mysqli_query($con,$i7);

$i8= "UPDATE prep_java1 SET participant_answer='".$a8."' WHERE no=8 AND id='".$id."';";
$q8=mysqli_query($con,$i8);

$i9= "UPDATE prep_java1 SET participant_answer='".$a9."' WHERE no=9 AND id='".$id."';";
$q9=mysqli_query($con,$i9);

$i10= "UPDATE prep_java1 SET participant_answer='".$a10."' WHERE no=10 AND id='".$id."';";
$q10=mysqli_query($con,$i10);

$i11= "UPDATE prep_java1 SET participant_answer='".$a11."' WHERE no=11 AND id='".$id."';";
$q11=mysqli_query($con,$i11);

$i12= "UPDATE prep_java1 SET participant_answer='".$a12."' WHERE no=12 AND id='".$id."';";
$q12=mysqli_query($con,$i12);

if($q12)
{
    header('Location:user_myprep_java_mark.php');

}



?>