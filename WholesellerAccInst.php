<?php
    include("connection.php");

    //$Wuser_id = $_SESSION['Wuser_id']; //to get the user id of the one who login 

 /*   if(!isset($Wuser_id))
        header('location:login_details.php');
    
        echo $user_id;*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WholeSeller Form</title>
</head>
<body style="background-color:#f2ff03;">
    <?php
        if(isset($_POST['submit'])){
            $TxtBxFName=$_POST["txtbxFName"];
            $TxtBxLName=$_POST["txtbxLName"];
            $TxtBxPhNo=$_POST["txtbxPhNo"];
            $TxtBxPassword=$_POST["txtbxPassword"];
            //$HashPassword=md5($TxtBxPassword);//encrypt password
            $TxtBxShopAdd=$_POST["txtbxShopAdd"];
       
            if($TxtBxFName !="" && $TxtBxLName !="" && $TxtBxPhNo !="" && $TxtBxShopAdd!=""){
                $sql="INSERT into wholesellertb(First_Name, Last_Name, Phone_Number,W_Password, Shop_Address) VALUES('$TxtBxFName','$TxtBxLName','$TxtBxPhNo','$TxtBxPassword','$TxtBxShopAdd')";
                if(mysqli_query($dbcon, $sql)){
                    echo "Registered Successfully<br>";
                    echo "<script>window.location='WholesellerItems.php'</script>";
                }else
                    echo "Register Error<br>";
                }
            }
    ?>

    <center>
        <h1><b><u>Whole-Seller Register Form</u></b></h1>
        <form method="POST" action="">
            <table>
                <tr>
                    <td><h3> First Name:<input type="Text" name="txtbxFName" placeholder="First Name" required></h3></td>
                </tr>
            <tr>
                <td><h3> Last Name:<input type="Text" name="txtbxLName" placeholder="Last Name" required></h3></td>
            </tr>
            <tr>
                <td><h3>Phone Number:<input type="numeric" name="txtbxPhNo" placeholder="Phone Number"required></h3></td>
            </tr>
                <tr>
                    <td><h3>Shop Address:<input type="Text" name="txtbxShopAdd" placeholder="Address"required></h3></td>
                </tr>
                <tr>
                    <td><h3>Password:<input type="password" name="txtbxPassword" placeholder="password"required></h3></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Register" onclick="window.location='WholesellerItems.php'">
           <a href="login_details.php" >Login</a>
        </form>
    </center>
</body>
</html>