<?php
    require "connection.php";
?>
<?php/*
    session_start();
    if (!isset($_SESSION['txtbxUsername']))
    header('Location: login_details.php');
*/?>
<html>
    <head>
        <title>Update Items</title>
        <body bgcolor="#2decEc">
            <center>
                <table>
                    <form method="post">
                        <tr>
                            <td><b>Enter Item Id</b></td>
                            <td><input type="text" name="txtbxItmId" placeholder="Item Id"></td>
                            <td><input type="submit" name="search" value="Search"></td>

                            <?php
                                if(isset($_POST['search'])){
                                    $Item_Id=$_POST['txtbxItmId'];//the prefix s here symbolize search just to understand

                                    $Item_Name="";
                                    $Item_Image="";

                                    $sql="select * from houseplastics where ItemId='$Item_Id'";
                                    $result=mysqli_query($dbcon, $sql);
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            $Item_Id=$row["ItemId"];
                                            $Item_Name=$row["ItemName"];
                                            $Item_Image=$row["ItemImage"];
                                        }
                                    }
                                    else
                                        echo "<center>Item Id does not exist</center>";
                                }
                            ?>
                        </tr>
                        <div class="ItemTable" size="10">
                            <tr>
                                <td><b>Item Id</b></td>
                                <td><input type="text" name="txtbxItmId1" value="<?php echo @ $Item_Id ?>"readonly></td>
                            </tr>
                            <tr>
                                <td><b>Item Name</b></td>
                                <td><input type="text" name="txtbxItmName" value="<?php echo @ $Item_Name ?>"></td>
                            </tr>
                            <tr>
                                <td><b>Item Image</b></td>
                                <td><input type="text" name="txtbxItmImage" value="<?php echo @ $Item_Image ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="update" value="Update"></td>
                            </tr>
                        </div>
                        
                    </form>
                </table>
            </center>
        </body>
    </head>
</html>

<?php
    if(isset($_POST['update'])){
        $ItemId=$_POST["txtbxItmId1"];
        $ItemName=$_POST["txtbxItmName"];
        $ItemImage=$_POST["txtbxItmImage"];
        
        //echo "sdsa.",$ItemId;
        if($sql="update houseplastics set ItemName='$ItemName',ItemImage='$ItemImage'where ItemId='$ItemId'"){
            echo "Update Successfully";
        } else
        echo "Update Failed";
    } 
?>