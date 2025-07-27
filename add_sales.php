<?php

$s_name=$_POST['Product_Name'];
$s_quantity=$_POST['Quantity'];
$s_date=$_POST['S_Date'];



include 'db.php';

$sql="INSERT INTO Sales(Product_Name,Quantity,S_Date)VALUES('$s_name','$s_quantity','$s_date')";
$result= mysqli_query($con,$sql);

if($result){
    header('Location:sales.php');
}
?>