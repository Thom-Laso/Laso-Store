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
        <title>Delete items</title>
    </head>
    <body>
        <center>
            <?php
            //Display Items
                  
                    $sql="select * from itemtb";
                    $result=$dbcon -> query($sql);
                
                    echo "<table border=2><tr><td><b>Item Name</b></td><td><b>Item Id</b></td><td><b>Item Image</b></td></tr>";
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<td>".$row["product_name"]."</td>";
                           // echo "<td>".$row["item_name"]."</td>";
                            echo "<td>".$row["item_id"]."</td>";
                            echo "<td>".$row["product_image"]."</td>";
                            echo "<td><img src='./".$row['product_image']."'></td></tr>";
                            
                        }
                        echo"</table><br>";
                    }
                    else{
                        echo"No Result </center>";
                    }

            //Delete Items
                    if(isset($_POST['itmsubmit'])){
                        $ItmId=$_POST["txtbxItem_Id"];
                        $sqlItm="delete from itemtb where item_id=$ItmId";

                        if(mysqli_query($dbcon,$sqlItm))
                        {
                            echo "Item deleted successfully";
                        }
                        else
                            echo "Cannot Delete Item";    
                    }
            ?>

            <form method="post">
                <table>
                    <tr>
                        <td>Item ID:</td><td><input type="text" name="txtbxItem_Id" id="txtbxItem_Id" placeholder="Enter item id"value=""></td>
                    </tr>
                    <tr>
                        <th colspan=2><input type="submit" name="itmsubmit" value="DELETE"></th>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>