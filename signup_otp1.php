<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database);

$otp= $_POST['otp'];
$ID = $_SESSION['i'];

$search="SELECT otp FROM ucode_info
WHERE id='".$ID."' ;";

$query=mysqli_query($con,$search);

if($query)
{
    if (mysqli_num_rows($query) > 0)
    {
        while($row= mysqli_fetch_assoc($query))
        {
            $o= $row["otp"];

            if($o==$otp)
            {
                header('Location:signup_pass.php');
            }
            else
            {
                header('Location:signup_wrong_otp.php');
            }
        }
    }
}



?>