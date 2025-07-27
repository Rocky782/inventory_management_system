<?php

include 'db.php';
$p_id=$_GET['Product_ID'];

$sql="DELETE FROM Product WHERE Product_ID=$p_id";
$result=mysqli_query($con,$sql);
if($result){
    header("location:product.php");
}

?>