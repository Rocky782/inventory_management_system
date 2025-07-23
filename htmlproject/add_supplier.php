<?php

$s_name=$_POST['Name_of_company'];
$s_address=$_POST['S_Address'];
$s_email=$_POST['Email'];
$s_phone=$_POST['Phone_no'];


# echo "Product name is ".$p_name;

include 'db.php';

$sql="INSERT INTO Supplier(Name_of_company,S_Address,Email,Phone_no)VALUES('$s_name','$s_address','$s_email','$s_phone')";
$result= mysqli_query($con,$sql);

if($result){
    header('Location:suppliers.php');
}
