<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 
$id= $_SESSION['s'];

$search= "SELECT contest_name,question FROM active_contest1 ORDER BY contest_no DESC LIMIT 1";
$sq= mysqli_query($con,$search);
if($sq)
{
    while($row=mysqli_fetch_assoc($sq))
    {
        $name=$row["contest_name"];
        $q=$row["question"];

        if(isset($_POST['submit']))
            {
                
                
               
           

            }
            else
            {
                    $filen= $_FILES['upcode']['name'];
                    $tmp= $_FILES['upcode']['tmp_name'];

               



                    $fullname=$id."_".$name."_".$filen;

                    

                    $uploc= "active_contest/".$fullname;
                


                if(move_uploaded_file($tmp,$uploc))
                {
                    $insert="INSERT INTO active_contest2(id,contest_n,ques,code_file) VALUES('".$id."','".$name."','".$q."','".$fullname."');";
                    $query2=mysqli_query($con,$insert);
                    if($query2)
                    {
                        header('Location:user_active_contest.php');
                    }
                }
            }
        
    }
}

?>

