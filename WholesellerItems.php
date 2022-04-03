<?php
    include ("connection.php");
    //require_once('./DB/component.php');
    //require_once('DB/CreateDb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WholeSeller Items</title>
</head>
    <body>

        <?php /*
            $database = (dbname:"lasodb",tablename:"itemtb");
            $result=$database->getData();
            while($row = mysqli_fetch_assoc($result)){
                component($WItemName=$row['product_name'],$WItemPrice=$row['product_price'],$WItemImg=$row['product_image']);
            }*/
        ?>

    <center>
        <h1>Items</h1>
        <form method="POST"action="">
            <table>
                    <tr><td><b>Item Name</b></td><td><b>Item Price</b></td><td><b>Item Quantity</b></td></tr>
                    <tr>
                        <td>Smart Almirah</td><td>&#8377;000</td><td><input type="numeric" name="txtbxWItmQnty" size="3"></td><td><img src="./uploaded/nmSmartAlmirah.png" height="70" width="70"></td><td><input type="checkbox" name="chkbxWItm"></td>
                    </tr>
            </table>
            <button name="submit">Order</button>
        </form>
    </center>
</body>
</html>l