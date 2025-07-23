<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Enter the sales detail</h1><br><br>

        <form action="add_sales.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Product Name</label>
                <input type="text" name="Product_Name" required><br><br>
           </div>

           <div class="product_detail">
                <label for="">Quantity</label>
                <input type="text" name="Quantity" required><br><br>
           </div>

           <div class="product_detail">
                <label for="">Sales Date</label>
                <input type="date" name="S_Date" required><br><br>
           </div>

           
           
            <div class="submit_product_button">
            <button>Add Sales</button><br><br>
            </div>
        </form>

        <hr><br><br>
        <h2>Total sales</h2><br><br>
        <div class="table"> 
            <center>
            <table   cellpadding="10px" >
            <tr>
                
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Sales Date</th>
                
                <th>Actions</th>
        </div>
            </center>
        
            <?php
            include 'db.php';
            $sql="SELECT * FROM Sales";

            $result=mysqli_query($con,$sql);

            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $s_id=$row['Sales_ID'];
                    $s_name=$row['Product_Name'];
                    $s_quantity=$row['Quantity'];
                    
                    $s_date=$row['S_Date'];
                     
                    
                     ?>
                     <tr>
                        
                        <td><?php echo $s_name?> </td>
                        <td><?php echo $s_quantity?> </td>
                        <td><?php echo $s_date?> </td>
                       
                        <td>
                            <a href="edit_sales.php?Sales_ID=<?php echo $s_id?>">Update</a>
                            <a href="delete_sales.php?Sales_ID=<?php echo $s_id?>">Delete</a>
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