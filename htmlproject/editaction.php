<?php

include 'db.php';
$p_id = $_POST['Product_ID'];
$p_name = $_POST['Product_Name'];
$p_mod = $_POST['Model'];
$p_price = $_POST['Price_per_product'];
$p_quantity = $_POST['Quantity'];
// $p_category = $_POST['Category'];

$sql = "UPDATE Product SET Product_Name = '$p_name', 
Model = '$p_mod', Price_per_product = '$p_price', 
Quantity ='$p_quantity' /*Category ='$p_category' */
WHERE Product_ID = $p_id";

$result = mysqli_query($con,$sql);

if($result){
   
    header("location:product.php");
}

?>