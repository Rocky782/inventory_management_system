<?php

include 'db.php';
$s_id=$_GET['Supplier_ID'];

$sql="DELETE FROM Supplier WHERE Supplier_ID=$s_id";
$result=mysqli_query($con,$sql);
if($result){
    header("location:suppliers.php");
}

?>