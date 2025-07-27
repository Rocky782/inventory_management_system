<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Inventory Management System</title>

    <!--linking to css-->
    <link rel="stylesheet" href="2.css">
</head>
<body>

               
<header>
<center>
        <h1>Enter the product detail</h1><br><br>

        <form action="adddata.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Product Name</label>
                <input type="text" name="Product_Name" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">model</label>
                <input type="varchar" name="model" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Price per product</label>
                <input type="number" name="Price_per_product" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Quantity</label>
                <input type="number" name="Quantity" required><br><br>
           </div>
           <!-- <div class="product_detail">
                <label for="">Category</label>
                <input type="text" name="Category" required><br><br>
           </div> -->
            <div class="submit_product_button">
            <button>Add Product</button><br><br>
            </div>
        </form>

        <hr><br><br>
        <h2>List of Products</h2><br><br>
        <div class="table"> 
            <center>
            <table   cellpadding="10px" >
            <tr>
                
                <th>Product Name</th>
                <th>model</th>
                <th>Price per product</th>
                <th>Quantity</th>
                
                <th>Actions</th>
        </div>
            </center>
        
            <?php
            include 'db.php';
            $sql="SELECT * FROM Product";

            $result=mysqli_query($con,$sql);

            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $p_id=$row['Product_ID'];
                     $p_name=$row['Product_Name'];
                     $p_mod=$row['Model'];
                     $p_price=$row['Price_per_product'];
                     $p_quantity=$row['Quantity'];
                     // $p_category=$row['Category']; 
                     ?>
                     <tr>
                        <td><?php echo $p_name?> </td>
                        <td><?php echo $p_mod?> </td>
                        <td><?php echo $p_price?> </td>
                        <td><?php echo $p_quantity?> </td>
                        <!-- <td><?php echo $p_category?> </td> -->
                        <td>
                            <a href="edit.php?Product_ID=<?php echo $p_id?>">Update</a>
                            <a href="delete.php?Product_ID=<?php echo $p_id?>">Delete</a>
                        </td>

                    </tr>
                    <?php
                }
            }
            

            ?>
                
        </table>

    </header>

       </body>
       </html>