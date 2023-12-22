<?php

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database);


$id= $_POST['id'];
$email=$_POST['email'];
session_start();
$_SESSION['f'] = $id;

$search="SELECT pass FROM ucode_info
WHERE id='".$id."' ;";

$query=mysqli_query($con,$search);

if (mysqli_num_rows($query) > 0)
{
    $search0="SELECT email FROM uiu
    WHERE id='".$id."' ;";

    $query0=mysqli_query($con,$search0);
    if (mysqli_num_rows($query0) > 0)
    {
        while($row= mysqli_fetch_assoc($query0))
        {
            $em= $row['email'];
            if($em==$email)
            {
                $otp = random_int(100000, 999999);
                $update="UPDATE ucode_info SET otp= ".$otp." WHERE id= '".$id."';";
                $query2=mysqli_query($con,$update);
                if($query2)
                {
                    $to_email = $email;
                    $subject = "OTP For Sign Up In UCODE";
                    $body = "Your OTP is ".$otp;
                    $headers = "From: uiumail15@gmail.com";
                    if (mail($to_email, $subject, $body, $headers)) {
                        header('Location:forgot_pass3_ucode.php');
                    }
                    
                    
    
    
                }

            }
            else
                {
                    header('Location:forgot_pass2.1_wrong_email_ucode.php');

                }
            
        }
    }

    


}
else
{
    header('Location:forgot_pass2.1_wrong_info_ucode.php');
}



?>










                        