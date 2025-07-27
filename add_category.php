<?php

$c_name=$_POST['Category'];


# echo "Product name is ".$p_name;

include 'db.php';

$sql="INSERT INTO Categories(Category)VALUES('$c_name')";
$result= mysqli_query($con,$sql);

if($result){
    
    header('Location:categories.php');
}
?>