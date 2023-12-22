<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 

$name=$_POST["c_name"];
$q=$_POST["que"];
$in=$_POST["s_input"];
$out=$_POST["s_output"];

$insert= "INSERT INTO active_contest1(contest_name,question,sample_input,sample_output,status) VALUES('".$name."','".$q."','".$in."','".$out."','off');";
$query= mysqli_query($con,$insert);
if($query)
{
    header('Location:admin_active_contest.php');
}



?>