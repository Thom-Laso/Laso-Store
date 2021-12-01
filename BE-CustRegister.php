<?php
    include("BE-Connection.php");
?>

<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <center>
            <?php
                if(isset($_POST["submit"])){
                    $Name=$_POST["CustName"];
                    $PhoneNo=$_POST["CustPhoneNo"];
                    $Email=$_POST["CustEmail"];
                    $Address=$_POST["CustAddress"];
                    $ID=$_POST["CustID"];

                    $sql="insert into customer values('$Name',$PhoneNo,'$Email','$Address','$ID')";
                    if(mysqli_query($dbcon,$sql)){
                        echo "You Have Successfully Register";
                    }
                    else
                    echo "Error...";
                }
            ?>
            <form method="post">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="CustName">
                    </tr>
                    <tr>
                        <td>Phone No:</td>
                        <td><input type="numeric" name="CustPhoneNo">
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="CustEmail">
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="CustAddress">
                    </tr>
                    <tr>
                        <td>ID(Adhaar):</td>
                        <td><input type="text" name="CustID">
                    </tr>
                </table>
                <button name="submit">Rregister</button>
        </center>
    </body>
</html>