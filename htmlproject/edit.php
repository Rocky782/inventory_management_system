<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Update product</h1><br><br>
        </header>

        <?php
        include 'db.php';
        $p_id = $_GET['Product_ID'];

        $sql = "SELECT * FROM Product WHERE Product_ID = $p_id";
        $result = mysqli_query($con, $sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $product_name=$row['Product_Name'];
            $product_mod=$row['model'];
            $product_price=$row['Price_per_product'];
           $product_quantity=$row['Quantity'];
        }

        ?>


        <form action="editaction.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Product Name</label>
                <input type="text" name="Product_Name" id="Product_Name" value="<?php global $product_name; echo $product_name?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Model</label>
                <input type="varchar" name="Model" id="Model" value="<?php global $product_mod; echo $product_mod?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Price per product</label>
                <input type="number" name="Price_per_product" id="Price_per_product" value="<?php global $product_price; echo $product_price?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Quantity</label>
                <input type="number" name="Quantity" id="Quantity" value="<?php global $product_quantity; echo $product_quantity?>" required><br><br>
           </div>
           <!-- <div class="product_detail">
                <label for="">Category</label>
                <input type="text" name="Category" id="Category" value="<?php global $product_category; echo $product_category?>" required>
           </div> -->

          
                <input type="hidden" name="Product_ID" id="Product_ID" value="<?php global $p_id; echo $p_id?>" required><br><br>
                

            <div class="submit_product_button">
            <button>Update</button>
            </div>
        </form>
</body>
</html>