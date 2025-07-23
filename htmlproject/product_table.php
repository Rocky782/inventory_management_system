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

        $sql="CREATE TABLE Product(
            Product_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Product_Name VARCHAR(30) NOT NULL,
            Model varchar(50) not null,
            Price_per_product INT(10) UNSIGNED,
            Quantity INT(10) UNSIGNED
            /* Category VARCHAR(30)*/
        )";
        if(mysqli_query($con,$sql)){
            echo "table product created successfully";
        }
        else{
            echo "error creating table:".mysqli_error($con);
        }

        
        mysqli_close($con);
    ?>
</body>
</html>