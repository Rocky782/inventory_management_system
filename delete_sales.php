<?php

include 'db.php';
$s_id=$_GET['Sales_ID'];

$sql="DELETE FROM Sales WHERE Sales_ID=$s_id";
$result=mysqli_query($con,$sql);
if($result){
    header("location:sales.php");
}

?>