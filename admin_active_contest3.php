<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 

$search= "SELECT contest_name , contest_no FROM active_contest1 ORDER BY contest_no DESC LIMIT 1";
$sq= mysqli_query($con,$search);
if($sq)
{
    while($row=mysqli_fetch_assoc($sq))
    {
        $c_name=$row["contest_name"];
        $no=$row["contest_no"];
        $update="UPDATE active_contest1 SET status='off' WHERE contest_name='".$c_name."' AND contest_no=".$no;
        $query= mysqli_query($con,$update);
        if($query)
        {
            header('Location:admin_active_contest.php');
        }


    }
}






?>