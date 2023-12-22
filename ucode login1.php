<?php
$servername="localhost";

$username="root";

$password= "";

$database="ucode";


$con= mysqli_connect($servername,$username,$password,$database);
$a = $_POST['uname'];
$b=md5($_POST['psw']);


session_start();
$_SESSION['s'] = $a;

$search = "SELECT id FROM ucode_info 
WHERE id='".$a."';";
$query=mysqli_query($con,$search);
if($con)
{
    if (mysqli_num_rows($query) > 0)
    {



        $search1 = "SELECT pass FROM ucode_info 
        WHERE id='".$a."';";
        $query=mysqli_query($con,$search1);
        if($con)
        {
         if (mysqli_num_rows($query) > 0)
         {
          while($row= mysqli_fetch_assoc($query))
          {
            $p= $row["pass"];
            $d= $row["id"];

            if($p==$b)
            {
                $search2 = "SELECT type FROM uiu
                WHERE id='".$a."';";
                $query1=mysqli_query($con,$search2);

                if (mysqli_num_rows($query1) > 0)
                {
                    while($row= mysqli_fetch_assoc($query1))
                    {
                        $t= $row["type"];
                        if($t="Student")
                        {
                            header('Location:user_homepage_ucode.php');

                        }
                        else
                        {
                            header('Location:admin_homepage_ucode.php');
                        }
                    }

                }





                
            }
            else
            {
                header('Location:login_failed.php');
                
            }
           }
         }
        }

    }
    else
    {
        header('Location:login_failed.php');
    }

}











?>

