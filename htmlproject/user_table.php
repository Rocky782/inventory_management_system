<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating product table</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="fosp";

        $con=mysqli_connect($servername ,$username ,$password ,$dbname);
        if(! $con){
            die ("connection failed:".mysqli_connect_error());
        }

        $sql="CREATE TABLE User(
            User_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
            Username VARCHAR(30) NOT NULL,
            Pass VARCHAR(30) NOT NULL
        )";
        if(mysqli_query($con,$sql)){
            echo "table user created successfully";
        }
        else{
            echo "error creating table:".mysqli_error($con);
        }

        
        mysqli_close($con);
    ?>
</body>
</html>