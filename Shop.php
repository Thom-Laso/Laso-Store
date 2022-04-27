<?php
//start session
session_start();
require_once('DB/CreateDb.php');
require_once('./DB/component.php');

$user_id = $_SESSION['user_id']; //to get the user id of the one who login from Rlogin_details.php

if(!isset($user_id))
    header('location:Rlogin_details.php');

    echo $user_id;
//create instance of CreateDb.class
$database = new CreateDb(dbname:"lasodb",tablename:"itemtb");

if(isset($_POST['add'])){// "add" from component.php
    //print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
        $item_array_id=array_column($_SESSION['cart'], "product_id");//this will return an array of product Id

        if(in_array($_POST['product_id'],$item_array_id)){
           
            echo '<script>alert("Your Product is already in the cart")</script>';
            echo "<script>window.location='Shop.php'</script>";
        }else{
            $count=count($_SESSION['cart']);//this count function returns how many items are there in a session variable/array
            $item_array=array(
                'product_id' =>$_POST['product_id']
            );

            $_SESSION['cart'][$count]=$item_array;
            //print_r($_SESSION['cart']);
        }
    }else{

        $item_array=array(
            'product_id' =>$_POST['product_id']
        );

        //create new session variable
        $_SESSION['cart'][0]=$item_array;
        //print_r($_SESSION['cart']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Shop</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Shop.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
</head>
<body>
        <?php require_once("header.php");?>
    <div class="container">
        <div class="row text-center py-5"> <!--py is padding y-->
            <?php 
                $result=$database->getData();
                while($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'],$row['product_fprice'], $row['product_price'], $row['product_image'],$row['item_id']);
                }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <footer>
            <br><div class="whatsapp"><i class="bi bi-whatsapp">&nbsp; 8132851005</i><br></div>
            <div class="telephone"><i class="bi bi-telephone-fill">&nbsp;&nbsp;9999999999</i><br></div>
            <h5 id="sign"></h5>
                <h5 id="hire">To hire a Web Developer:&nbsp;<i class="bi bi-envelope"><i>&nbsp;thomlinpjlaso@gmail.com</i></i></h5>
        </footer>
</body>
</html>