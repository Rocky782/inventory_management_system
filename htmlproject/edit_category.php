<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Update category</h1><br><br>
        </header>

        <?php
        include 'db.php';
        $c_id = $_GET['Category_ID'];

        $sql = "SELECT * FROM Categories WHERE Category_ID = $c_id";
        $result = mysqli_query($con, $sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $category_name=$row['Category'];
            
        }

        ?>


        <form action="editaction_category.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Category</label>
                <input type="text" name="Category" id="Category" value="<?php global $category_name; echo $category_name?>" required><br><br>
           </div>
           
          
                <input type="hidden" name="Category_ID" id="Category_ID" value="<?php global $c_id; echo $c_id?>" required><br><br>
                

            <div class="submit_product_button">
            <button>Update</button>
            </div>
        </form>
</body>
</html>