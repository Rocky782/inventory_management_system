<?php
$servername="localhost";
$username="root";
$password="";

$con=mysqli_connect($servername,$username,$password) or die();
if(!$con){
    die('could not connect:'.mysqli_error());
}
else{
    echo"connection successful!";
}

?>