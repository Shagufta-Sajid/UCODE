<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 
$b = $_SESSION['s'];


$curpass=md5($_POST['cpass']) ;
$newpass=md5($_POST['newpass']);
$newconpass=md5($_POST['newcpass']);






$search= "SELECT pass FROM ucode_info WHERE id= '".$b."';";
$query=mysqli_query($con,$search);

if($query)
{
    if (mysqli_num_rows($query) > 0)
    {
        while($row= mysqli_fetch_assoc($query))
        {
            $p= $row["pass"];
            

            if($p==$curpass)
            {
                if($newpass==$newconpass)
                {
                    $update="UPDATE ucode_info SET pass='".$newpass."' WHERE id= '".$b."';";
                    $query1= mysqli_query($con,$update);
                    if($query1)
                    {
                        header('Location:admin_password_changed.php');
                    }
                    
                }
                else{
                    header('Location:admin_password_changed_failed.php');

                }
                
               
            }
            else{
                header('Location:admin_password_changed_failed.php');

            }
            
            
        }
    }
}








?>
