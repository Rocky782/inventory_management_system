<?php

if (isset($_POST['reg_bt'])){
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    
    $con=mysqli_connect("localhost","root","");
    mysqli_query($con,"use fosp;");
  
    $select=mysqli_query($con, "insert into user(Username,Email,Pass) values('$uname','$email','$pass');");
    if ($select){
        mysqli_close($con);
        header("location:index.html");
    }
    else {
        die("Erorr occured");
    }
}
else {
    die ("Data fetched illegeally");
}

?>
