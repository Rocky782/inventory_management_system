<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating category table</title>
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

        $sql="CREATE TABLE Categories(
            Category_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Category VARCHAR(30) NOT NULL
        )";
        if(mysqli_query($con,$sql)){
            echo "table categories created successfully";
        }
        else{
            echo "error creating table:".mysqli_error($con);
        }

        
        mysqli_close($con);
    ?>
</body>
</html>