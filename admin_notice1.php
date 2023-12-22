<?php

$servername="localhost";

$username="root";

$password= "";

$database="ucode";

$con= mysqli_connect($servername,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
}


?>