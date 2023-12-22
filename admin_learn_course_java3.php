<?php


$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database);

$fno= $_POST['fno'];

$sELECT="SELECT filename FROM learn_java WHERE no=".$fno.";";
$qUERY= mysqli_query($con,$sELECT);
if($qUERY)
{
    if (mysqli_num_rows($qUERY) > 0)
    {
        while($row= mysqli_fetch_assoc($qUERY))
        {
            $fname= $row["filename"];
            $path="learnCourse_java/".$fname;
            if(@unlink($path))
            {
                $delete= "DELETE FROM learn_java WHERE no=".$fno.";";

                $query=mysqli_query($con,$delete);
                if($query)
                {
                    $q1="SET  @num := 0;";
                    $q2="UPDATE learn_java SET no = @num := (@num+1);";
                    $q3= "ALTER TABLE learn_java AUTO_INCREMENT =1;";
                    
                    $query1=mysqli_query($con,$q1);
                    $query2=mysqli_query($con,$q2);
                    $query3=mysqli_query($con,$q3);
                    if($query1)
                    {
                        if($query2)
                        {
                            if($query3)
                            {
                                header('Location:admin_learn_course_java2.php');
                            }
                        }
                    }
                }

            }
        }
    }
}



?>

