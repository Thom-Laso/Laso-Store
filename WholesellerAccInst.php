<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WholeSeller Form</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $TxtBxFName=$_POST["txtbxFName"];
            $TxtBxLName=$_POST["txtbxLName"];
            $TxtBxPhNo=$_POST["txtbxPhNo"];
            $TxtBxShopAdd=$_POST["txtbxShopAdd"];
       
            if($TxtBxFName !="" && $TxtBxLName !="" && $TxtBxPhNo !="" && $TxtBxShopAdd!=""){
                $sql="INSERT into wholesellertb(First_Name, Last_Name, Phone_Number, Shop_Address) VALUES('$TxtBxFName','$TxtBxLName','$TxtBxPhNo','$TxtBxShopAdd')";
                if(mysqli_query($dbcon, $sql)){
                    echo "Submitted Successfully<br>";
                }else
                    echo "Submit Error<br>";
                }
            }
    ?>

    <center>
        <h1><b><u>Whole-Seller Form</u></b></h1>
        <form method="POST" action="">
            <table>
                <tr>
                    <td> First Name:<input type="Text" name="txtbxFName" placeholder="First Name" required></td>
                </tr>
            <tr>
                <td> Last Name:<input type="Text" name="txtbxLName" placeholder="Last Name" required></td>
            </tr>
            <tr>
                <td>Phone Number:<input type="numeric" name="txtbxPhNo" placeholder="Phone Number"required></td>
            </tr>
                <tr>
                    <td>Shop Address:<input type="Text" name="txtbxShopAdd" placeholder="Address"required></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>
</html>