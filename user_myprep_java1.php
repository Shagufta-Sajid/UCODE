<?php
session_start();

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database); 
$id = $_SESSION['s'];

$s= "SELECT question FROM prep_java1 WHERE id='".$id."';";
$query=mysqli_query($con,$s);

if($query)
{
    if (mysqli_num_rows($query) > 0)
    {
        $d= "DELETE FROM prep_java1 WHERE id='".$id."';";
        $query1=mysqli_query($con,$d);
        if($query1)
        {
            
            $sql = "INSERT INTO prep_java1 (id,question,o1,o2,o3,o4,answer,finish)"

                . "SELECT '".$id."',prep_java.que,prep_java.c1,prep_java.c2,prep_java.c3,prep_java.c4,prep_java.ans,(SELECT ADDTIME((SELECT NOW()), '0 0:13:0'))"

                . "FROM prep_java ORDER BY RAND ( )  "

                . "LIMIT 12;";


            ;
            $q1= mysqli_query($con,$sql);
            if($q1)
            {
                $a=" SELECT @i:=0;";
                $a1=mysqli_query($con,$a);
                if($a1)
                {
                    $b="UPDATE prep_java1 SET no = @i:=@i+1 WHERE id='".$id."';";
                    $b1=mysqli_query($con,$b);
                    if($b1)
                    {
                        header('Location:user_myprep_java2.php');
                    }
                }
            }
           


        }
    }
    else
    {
       
        $sql = "INSERT INTO prep_java1 (id,question,o1,o2,o3,o4,answer,finish)"

        . "SELECT '".$id."',prep_java.que,prep_java.c1,prep_java.c2,prep_java.c3,prep_java.c4,prep_java.ans,(SELECT ADDTIME((SELECT NOW()), '0 0:13:0'))"

        . "FROM prep_java ORDER BY RAND ( )  "

        . "LIMIT 12;";


        ;
        $q1= mysqli_query($con,$sql);
        if($q1)
          {
             $a=" SELECT @i:=0;";
             $a1=mysqli_query($con,$a);
             if($a1)
            {
               $b="UPDATE prep_java1 SET no = @i:=@i+1 WHERE id='".$id."';";
               $b1=mysqli_query($con,$b);
               if($b1)
                {
                  header('Location:user_myprep_java2.php');
                }
            }
          }
    }
    
    
}




?>