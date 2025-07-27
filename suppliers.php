<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Enter the supplier's detail</h1><br><br>

        <form action="add_supplier.php" method="post">
           <div class="product"> 
           <div class="product_detail">
                <label for="">Name of company</label>
                <input type="text" name="Name_of_company" required><br><br>
           </div>

           <div class="product_detail">
                <label for="">Address</label>
                <input type="text" name="S_Address" required><br><br>
           </div>

           <div class="product_detail">
                <label for="">Email</label>
                <input type="email" name="Email" required><br><br>
           </div>

           <div class="product_detail">
                <label for="">Phone number</label>
                <input type="number" name="Phone_no" required><br><br>
           </div>
           
            <div class="submit_product_button">
            <button>Add Supplier</button><br><br>
            </div>
        </form>

        <hr><br><br>
        <h2>List of Suppliers</h2><br><br>
        <div class="table"> 
            <center>
            <table   cellpadding="10px" >
            <tr>
                
                <th>Name of company</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Actions</th>
        </div>
            </center>
        
            <?php
            include 'db.php';
            $sql="SELECT * FROM Supplier";

            $result=mysqli_query($con,$sql);

            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $s_id=$row['Supplier_ID'];
                    $s_name=$row['Name_of_company'];
                    $s_address=$row['S_Address'];
                    $s_email=$row['Email'];
                    $s_phone=$row['Phone_no'];
                     
                    
                     ?>
                     <tr>
                        <td><?php echo $s_name?> </td>
                        <td><?php echo $s_address?> </td>
                        <td><?php echo $s_email?> </td>
                        <td><?php echo $s_phone?> </td>
                       
                        <td>
                            <a href="edit_supplier.php?Supplier_ID=<?php echo $s_id?>">Update</a>
                            <a href="delete_supplier.php?Supplier_ID=<?php echo $s_id?>">Delete</a>
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