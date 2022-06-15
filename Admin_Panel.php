<?php
    include ("connection.php");
    session_start();
    //require_once('./DB/component.php');
    //require_once('DB/CreateDb.php');

    $AdUser_id = $_SESSION['AdUser_id']; //to get the user id of the one who login from login_details.php

if(!isset($AdUser_id))
    header('location:AdminLogin.php');
    echo $AdUser_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Administrator Panel</h1>
    <button><a href="InsertItems.php">Insert Items</a></button>
    <button><a href="EditItems.php">Edit Items</a></button>
    <button><a href="DeleteItems.php">Delete Items</a></button>


</body>
</html>