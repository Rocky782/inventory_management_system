<?php

include 'db.php';
$c_id=$_GET['Category_ID'];


$sql="DELETE FROM Categories WHERE Category_ID = $c_id";

$result=mysqli_query($con,$sql);
if($result){
    header("location:categories.php");
}

?>