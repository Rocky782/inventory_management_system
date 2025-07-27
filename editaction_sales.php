<?php

include 'db.php';
$s_id = $_POST['Sales_ID'];
$s_name = $_POST['Product_Name'];
$s_quantity = $_POST['Quantity'];
$s_date = $_POST['S_Date'];

$sql = "UPDATE Sales SET Product_Name = '$s_name', 
Quantity = '$s_quantity', S_Date = '$s_date'
WHERE Sales_ID = $s_id";

$result = mysqli_query($con,$sql);

if($result){
    header("location:sales.php");
}

?>