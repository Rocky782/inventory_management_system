<?php

include 'db.php';
$c_id = $_POST['Category_ID'];
$c_name = $_POST['Category'];

$sql = "UPDATE Categories SET Category = '$c_name' WHERE Category_ID = $c_id";

$result = mysqli_query($con,$sql);

if($result){
    header("location:categories.php");
}

?>