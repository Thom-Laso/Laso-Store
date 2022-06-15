<?php
    include ("connection.php");
    session_start();
    //require_once('./DB/component.php');
    //require_once('DB/CreateDb.php');

    $user_id = $_SESSION['user_id']; //to get the user id of the one who login from login_details.php

if(!isset($user_id))
    header('location:login_details.php');
    echo $user_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WholeSeller Items</title>
</head>
    <body style="background-color:#f2ff03;">
   <center> <h1>Whole Seller Items</h1></center>
        <?php 
       
        /*
            $database = (dbname:"lasodb",tablename:"itemtb");
            $result=$database->getData();
            while($row = mysqli_fetch_assoc($result)){
                component($WItemName=$row['product_name'],$WItemPrice=$row['product_price'],$WItemImg=$row['product_image']);
            }*//*
           echo "<center>
           <h1>Items</h1>
           <form method='POST'action=''>
             <table>
             <tr><td><b>Item Name</b></td><td><b>Item Price</b></td><td><b>Item Quantity</b></td></tr>
             </table>
             <button name='submi'>Order</button>
             </form>
         </center>";*/
            //for($i=1; $i<=6; $i++){

                $sql="select * from itemtb ";
                $result=$dbcon -> query($sql);
                $IName="";
                $IPrice="";
                $IImage="";
                
               
                    echo "<table border=2><tr><td><b>Item Name</b></td><td><b>Item Price</b></td><td><b>Item Image</b></td><td><b>Quantity</b></td></tr>";
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<td>".$row["product_name"]."</td>";
                           // echo "<td>".$row["item_name"]."</td>";
                            echo "<td>"."&#8377"."  ".$row["product_Wprice"]."</td>";
                            //echo "<td>".$row["product_image"]."</td>";
                            echo "<td><img src='./".$row['product_image']."'height=200px' width='300px'></td>";
                            echo "<td><input type='numeric' name='ItmQuantity'></td></tr>";
                        }
                        echo"</table><br>";
                    }
                    else{
                        echo"No Result </center>";
                    }
                    
                             // echo $ItemName." - "; 
                             
                             /* echo "
                                <tr>
                                    <td>$ItemName</td><td> &#8377 $ItemPrice</td><td><input type='numeric' name='txtbxWItmQnty' size='3'></td><td>$ItemImage</td>
                                </tr>
                                   ";*/  
           // }
  /*          outofForItemName:
                $IName=$ItemName;
                $IPrice=$ItemPrice;
                $IImage=$ItemImage;
*/
        ?>

<?php
     if(isset($_POST['submit'])){

        $sql2="select * from wholesellertb WHERE WholeSeller_Id='$user_id'";
                $result2=$dbcon -> query($sql2);
               
                    if($result2->num_rows>0){
                        while($row=$result2->fetch_assoc()){
                            $ShopAddress=$row["Shop_Address"];
                        }
                        
                    }
                    else{
                        echo"No Result for Shop Address</center>";
                    }
        //wholesellerID, itemID, Quantity, shippingplace, totalPrice
        $user_id;
        $ShopAddress;
        $ItemId;
        $ItemPrice;
        $ItemQuantity=$_POST["txtbxWItmQnty"];

        echo $user_id." ";
        echo $ItemId." ";
        echo $ItemPrice." ";
        echo $ItemQuantity." ";
        echo $ShopAddress." ";

        $TotalPrice=($ItemPrice * $ItemQuantity);
        echo $TotalPrice;
        if($ItemId !="" && $ItemPrice!="" && $ItemQuantity!=""){
            $sql= "INSERT  into carttb(WholeSeller_FK, item_FK, Quantity, ShippingPlace, TotalPrice) VALUES ('$user_id','$ItemId','$ItemQuantity','$ShopAddress','$TotalPrice')";
            if(mysqli_query($dbcon,$sql)){
                echo "Your Order has been placed<br>";
            }else
                echo "Sorry Your Order cannot be placed<br>";
        
       }
    }
?>
    <center>
            <button name="submit" id="btnWOrder">Order</button>
        </form>
    </center>
</body>
</html>