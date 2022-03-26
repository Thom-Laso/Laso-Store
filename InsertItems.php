<?php
    include("connection.php");
?>

<?php/*
    session_start();
    if (!isset($_SESSION['txtbxUsername']))
    header('Location: login_details.php');*/
?>
<html>
    <head>
        <title>Insert Items</title>
    </head>
    <body>
        <center>
        <?php
           if(isset($_POST['submit'])){

            $itemName=$_POST["txtbxItemName"];
            $itemPrice=$_POST["txtbxItemPrice"];
            $itemDPrice=$_POST["txtbxItemDiscount"];
                  
            $target ="uploaded/".basename($_FILES['image']['name']);
            $image=$_FILES['image']['name'];
            $tempname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tempname,$target);
           if($itemName !="" && $itemPrice!="" && $itemDPrice!="" && $target!=""){
                $sql= "INSERT  into itemtb(product_name, product_fprice, product_price, product_image) VALUES ('$itemName','$itemDPrice','$itemPrice','$target')";
                if(mysqli_query($dbcon,$sql)){
                    echo "Items Uploaded Successfully<br>";
                }else
                    echo "Upload Error<br>";
            
           }
           
            
        }
        ?>

<form method="POST" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><h1><b>Item Name:</b></h1></td>
                    <td><input type="text" name="txtbxItemName"></td>
                </tr>
                <tr>
                    <td><h1><b>Item Real Price:</b></h1></td>
                    <td><input type="numeric" name="txtbxItemPrice"></td>
                </tr>
                <tr>
                    <td><h1><b>Item Fake Price:</b></h1></td>
                    <td><input type="numeric" name="txtbxItemDiscount"></td>
                </tr>
                <tr>
                    <td><h1><b>Image:</b></h1></td>
                    <td><input type="file" name="image"></td>
                </tr>
            </table>
            <button name="submit" id="btnInsert">INSERT</button>
        </form>
        </center>
    </body>
</html>
