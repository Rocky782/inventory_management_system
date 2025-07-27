<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Inventory Management System</title>

    <!--linking to css-->
    <!--<link rel="stylesheet" href="css/style_homepage_admin.css">-->
</head>
<body>
    

               
<header>
        <h1>Enter the category</h1><br><br>

        <form action="add_category.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Category</label>
                <input type="text" name="Category" required><br><br>
           </div>
           
            <div class="submit_product_button">
            <button>Add Category</button><br><br>
            </div>
        </form>

        <hr><br><br>
        <h2>List of Categories</h2><br><br>
        <div class="table"> 
            <center>
            <table   cellpadding="10px" >
            <tr>
                
                <th>Categories</th>
                
                <th>Actions</th>
        </div>
            </center>
        
            <?php
            include 'db.php';
            $sql="SELECT * FROM Categories";

            $result=mysqli_query($con,$sql);

            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $c_id=$row['Category_ID'];
                     
                     $c_name=$row['Category'];
                     ?>
                     <tr>
                        
                        <td><?php echo $c_name?> </td>
                        <td>
                            <a href="edit_category.php?Category_ID=<?php echo $c_id?>">Update</a>
                            <a href="delete_category.php?Category_ID=<?php echo $c_id?>">Delete</a>
                        </td>

                    </tr>
                    <?php
                }
            }
            

            ?>
                
        </table>

    </header>r>
                
                
                
      


</body>
</html>