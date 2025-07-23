<?php

$p_name=$_POST['Product_Name'];
$p_mod=$_POST['model'];
$p_price=$_POST['Price_per_product'];
$p_quantity=$_POST['Quantity'];
// $p_category=$_POST['Category'];

# echo "Product name is ".$p_name;

include 'db.php';

$sql="INSERT INTO product(Product_Name,model,Price_per_product,Quantity)VALUES('$p_name','$p_mod','$p_price','$p_quantity')";
$result= mysqli_query($con,$sql);

if($result){
    
    //header('location:homepage.php');
    header('Location:product.php');
}
?>