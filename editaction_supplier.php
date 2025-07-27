<?php

include 'db.php';
$s_id = $_POST['Supplier_ID'];
$s_name = $_POST['Name_of_company'];
$s_address = $_POST['S_Address'];
$s_email= $_POST['Email'];
$s_phone = $_POST['Phone_no'];

$sql = "UPDATE Supplier SET Name_of_company = '$s_name', 
S_Address = '$s_address', Email = '$s_email', 
Phone_no ='$s_phone' 
WHERE Supplier_ID = $s_id";

$result = mysqli_query($con,$sql);

if($result){
    header("location:suppliers.php");
}

?>