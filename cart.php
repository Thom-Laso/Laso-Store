<?php 
    session_start();
    require_once('DB/CreateDb.php');
    require_once('DB/component.php');
    include("connection.php");
    $user_id = $_SESSION['user_id']; //to get the user id of the one who login from Rlogin_details.php

if(!isset($user_id))
    header('location:Rlogin_details.php');

    echo $user_id;
$USER_ID=$user_id;
    $db=new CreateDb(dbname:"lasodb",tablename:"itemtb");

    if(isset($_POST['remove'])){
        if(isset($_POST['remove'])){
            if($_GET['action']=='remove'){
                foreach($_SESSION['cart'] as $key => $value){
                    if($value["product_id"]==$_GET['id']){
                        unset($_SESSION['cart'][$key]);
                        echo "<script>alert('Product has been removed')</script>";
                        echo "<script>window.location='cart.php'</script>";
                    }
                }
            }
        }
    }

    /* Below is the portion where we make the order button 

    if(isset($_POST['submit'])){
        $RUser_Id=$_POST["Retailer_Id"];
       
        $Product_Quantity=$_POST["quantityId"];
       
    }
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Shop.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    
    <?php 
        require_once('header.php');
    ?>
    
    <form method="POST" action="">
        <div class="container-fluid">
            <div class="row px-5">
                <div class="col-md-7">
                    <div class="shopping-cart">
                        <h5><b>My Cart</b></h5>
                        <hr> 
                        <?php 
                        $total=0;
                        if(isset($_SESSION['cart'])){
                            $product_id=array_column($_SESSION['cart'], 'product_id');
                
                            //print_r($product_id);

                            $result=$db->getData();
                            while($row=mysqli_fetch_assoc($result)){
                                foreach($product_id as $id){
                                    if($row['item_id']==$id){
                                        cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['item_id']);
                                        $total=$total+(int)$row['product_price'];
                                    }
                                }
                            }
                        }else{
                            echo"<h5>Cart is Empty</h5>";
                        }
                            
                        ?>
                    </div>
                </div>
            
                <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                    <div class="pt-4">
                        <h6>PRICE DETAILS</h6>
                        <hr>
                        <div class="row price-details">1
                            <div class="col-md-6">
                                <?php 
                                    if(isset($_SESSION['cart'])){
                                        $count=count($_SESSION['cart']);
                                        echo"<h6>Price($count items)</h6>";
                                    }else{
                                        echo"<h6>Price(0 items)</h6>"; 
                                    }  
                                ?>
                                <h6>Delivery Charges</h6>
                                <hr>
                                <h6>Amount Payable</h6>
                            </div>
                            <div class="col-md-6">
                                <h6><?php echo "&#8377;".$total; ?></h6>
                                <h6 class="text-success">FREE</h6>
                                <hr>
                                <h6>&#8377;<?php echo $total; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <input type="submit" name="submit" id="submit" value="order">
        </center>
    </form>
    <!--To post the button-->
    <?php
        if(isset($_POST['submit'])){
            //$OrderId=$_POST[$product_id];
            echo "This is in the Post Order";
           // print_r($product_id);
           $PRODUCT_ID= implode(" ",$product_id);
           for($i=0;$i<=count($product_id);$i++){
                  //echo $product_id[$i].",";
                  $sql= "INSERT into carttb(retailerFK, item_FK, Quantity, ShippingPlace, TotalPrice)VALUES ('$USER_ID','$PRODUCT_ID','3','Mawlai','$total')";
                   if(mysqli_query($dbcon,$sql)){
                       echo "Items Uploaded Successfully<br>";
                   }else
                       echo "Upload Error<br>";
           }
        }
       /* echo ...;
        echo $product_id;
        $Product_Id= $product_id + $product_id;
        echo $Product_Id;
        echo $Product_Quantity;
        $Product_TotalPrice=$total;
        echo $Product_TotalPrice;*/

       // echo count($product_id);
       
        
 ?><!---->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>