<?php


$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database);

$qno= $_POST['qno'];

$delete= "DELETE FROM prep_java WHERE no=".$qno.";";

$query=mysqli_query($con,$delete);
if($query)
{
    $q1="SET  @num := 0;";
    $q2="UPDATE prep_java SET no = @num := (@num+1);";
    $q3= "ALTER TABLE prep_java AUTO_INCREMENT =1;";
    
    $query1=mysqli_query($con,$q1);
    $query2=mysqli_query($con,$q2);
    $query3=mysqli_query($con,$q3);
    if($query1)
    {
        if($query2)
        {
            if($query3)
            {
                header('Location:admin_java_my_prep3.php');
            }
        }
    }
}


?>

