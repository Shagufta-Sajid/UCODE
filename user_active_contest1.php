<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 

$search= "SELECT status FROM active_contest1 ORDER BY contest_no DESC LIMIT 1";
$sq= mysqli_query($con,$search);
if($sq)
{
    while($row=mysqli_fetch_assoc($sq))
    {
        $status=$row["status"];
        if($status== 'off')
        {
            header('Location:user_active_contest_off.php');

        }
        else
        {
            header('Location:user_active_contest_start.php');

        }
        
            
        


    }
}






?>