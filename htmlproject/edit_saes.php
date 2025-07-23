<header>
        <h1>Update sales</h1><br><br>
        </header>

        <?php
        include 'db.php';
        $s_id = $_GET['Sales_ID'];

        $sql = "SELECT * FROM Sales WHERE Sales_ID = $s_id";
        $result = mysqli_query($con, $sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $sales_name=$row['Product_Name'];
            $sales_quantity=$row['Quantity'];
            $sales_date=$row['S_Date'];
           
           


        }

        ?>


        <form action="editaction_sales.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Product Name</label>
                <input type="text" name="Product_Name" id="Product_Name" value="<?php global $sales_name; echo $sales_name?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Quantity</label>
                <input type="text" name="Quantity" id="Quantity" value="<?php global $sales_quantity; echo $sales_quantity?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Sales Date</label>
                <input type="date" name="S_Date" id="S_Date" value="<?php global $sales_date; echo $sales_date?>" required><br><br>
           </div>
           
                <input type="hidden" name="Sales_ID" id="Sales_ID" value="<?php global $s_id; echo $s_id?>" required><br><br>
                

            <div class="submit_product_button">
            <button>Update</button>
            </div>
        </form>