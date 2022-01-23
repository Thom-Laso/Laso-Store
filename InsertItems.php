<?php
    include("connection.php");
?>

<?php/*
    session_start();
    if (!isset($_SESSION['txtbxUsername']))
    header('Location: login_details.php');
*/?>
<html>
    <head>
        <title>Insert Items</title>
    </head>
    <body>
        <center>
        <?php
            if(isset($_POST['submit'])){
                $itemName=$_POST["txtbxItemName"];
                $itemId=$_POST["txtbxItemId"];

               /* $sqlItem="INSERT INTO houseplastics(ItemName, ItemId) VALUES('$itemName','$itemId')";
                if(mysqli_query($dbcon, $sqlItem)){
                    echo "Item Inserted Successfully <br>";
                }else
                echo "Insert Error <br>";

                //target directory to store the uploaded image
                $target ="uploaded/".basename($_FILES['image']['name']);
                //get the image from the form
                $image=$_FILES['image']['name'];
                $tempname=$_FILES['image']['tmp_name'];
                $sqlImg="INSERT INTO houseplastics(ItemImage) VALUES('$image')";
                mysqli_query($dbcon, $sqlImg);*/

                /*/moving the uploaded image into the
                if(move_uploaded_file($_FILES['image']['name'], $target)){
                    echo "Image Uploaded";
                }else{
                    echo "Image Cannot Upload";
                }*/
                $target ="uploaded/".basename($_FILES['image']['name']);
                $image=$_FILES['image']['name'];
                $tempname=$_FILES['image']['tmp_name'];
                move_uploaded_file($tempname,$target);
                if($itemName!="" && $itemId!="" && $image!=""){
                    $query="INSERT INTO houseplastics VALUES('$itemName','$itemId', '$target')";
                    $data=mysqli_query($dbcon,$query);
                    if($data){
                        echo "Data inserted into database";
                    }
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
                    <td><h1><b>Item Id:</b></h1></td>
                    <td><input type="text" name="txtbxItemId"></td>
                </tr>
                <tr>
                    <td><h1><b>Image:</b></h1></td>
                    <td><input type="file" name="image" ></td>
                </tr>
            </table>
            <button name="submit" id="btnInsert">INSERT</button>
        </form>
        </center>
    </body>
</html>
