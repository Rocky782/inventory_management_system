<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Update supplier</h1><br><br>
        </header>

        <?php
        include 'db.php';
        $s_id = $_GET['Supplier_ID'];

        $sql = "SELECT * FROM Supplier WHERE Supplier_ID = $s_id";
        $result = mysqli_query($con, $sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $supplier_name=$row['Name_of_company'];
            $supplier_address=$row['S_Address'];
            $supplier_email=$row['Email'];
            $supplier_phone=$row['Phone_no'];
           


        }

        ?>


        <form action="editaction_supplier.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Name of Company</label>
                <input type="text" name="Name_of_company" id="Name_of-company" value="<?php global $supplier_name; echo $supplier_name?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Address</label>
                <input type="text" name="S_Address" id="S_Address" value="<?php global $supplier_address; echo $supplier_address?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Email</label>
                <input type="email" name="Email" id="Email" value="<?php global $supplier_email; echo $supplier_email?>" required><br><br>
           </div>
           <div class="product_detail">
                <label for="">Phone number</label>
                <input type="number" name="Phone_no" id="Phone_no" value="<?php global $supplier_phone; echo $supplier_phone?>" required><br><br>
           </div>
           

          
                <input type="hidden" name="Supplier_ID" id="Supplier_ID" value="<?php global $s_id; echo $s_id?>" required><br><br>
                

            <div class="submit_product_button">
            <button>Update</button>
            </div>
        </form>
</body>
</html>