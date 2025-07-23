<?php


if(isset($_POST['lgn'])){
    $Username=$_POST['Username'];
    $Pass=$_POST['Pass'];

    $con=mysqli_connect("localhost","root","");
    mysqli_query($con,"use fosp");
    echo "database connected";
    $select=mysqli_query($con, "SELECT * FROM User WHERE Username='$Username' AND Pass='$Pass'");
    $row=mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["Username"]= $row['Username'];
        $_SESSION["Pass"]= $row['Pass'];
        if(isset($_POST['lgn'])){
        $Username=$_POST['Username'];
        $Pass=$_POST['Pass'];

        
        $select=mysqli_query($con, "SELECT * FROM User WHERE Username='$Username' AND Pass='$Pass'");
        $row=mysqli_fetch_array($select);

        if(is_array($row)){
            $_SESSION["Username"]= $row['Username'];
            $_SESSION["Pass"]= $row['Pass'];


        }
        else{
            echo "cannot verify user";
        }
    }

    if(isset($_SESSION["Username"])){
        header("location:homepage.html");
    }

    }
    else{
        echo "invalid email";
    }
}
else{
    echo "invalid data";
}

?>