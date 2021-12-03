<?php
    include("BE-Connection.php");
?>

<html>
    <head>
        <title>Register</title>
    </head>
    <body bgcolor="#18730b">
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
                        echo '<script>alert("You Have Successfully Register")</script>'; 
                    }
                    else
                    echo "Error...";
                }
            ?>
            <form method="post">
                <table>
                    <tr>
                        <td><h3>Name:</h3></td>
                        <td><h3><input type="text" name="CustName"></h3></td>
                    </tr>
                    <tr>
                        <td><h3>Phone No:</h3></td>
                        <td><h3><input type="numeric" name="CustPhoneNo"></h3></td>
                    </tr>
                    <tr>
                        <td><h3>Email:</h3></td>
                        <td><h3><input type="text" name="CustEmail"></h3></td>
                    </tr>
                    <tr>
                        <td><h3>Address:</h3></td>
                        <td><h3><input type="text" name="CustAddress"></h3></td>
                    </tr>
                    <tr>
                        <td><h3>ID(Adhaar):</h3></td>
                        <td><h3><input type="text" name="CustID"></h3></td>
                    </tr>
                </table>
                <button name="submit"><h3>Register</h3></a></button>
        </center>
    </body>
</html>