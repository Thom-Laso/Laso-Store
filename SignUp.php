<?php
    require "connection.php";
?>
<html>
    <head>
        <body>
            <h3><center>Create Account</h3>
                <?php
                    if(isset($_POST['register'])){
                        $username=$_POST["txtbxUsername"];
                        $password=$_POST["txtbxPassword"];
                        $name=$_POST["txtbxName"];
                        $address=$_POST["txtbxAdd"];

                        $sql="insert into account(Email_Id,Password,Name,Address) values('$username','$password','$name','$address')";

                        $result=mysqli_query($dbcon,$sql);
                        if(!$result)
                        die(mysql_error());
                        else
                        echo "<center> You Have Registered Successfully <a href='login_details.php'></a>Login</center>";
                    }
                ?>
                </center>
                <form method="post">
                    <center>
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="txtbxUsername" placeholder="Email address" required="required"></td>
                            </tr>

                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="txtbxPassword" placeholder="Password" required="required"></td>
                            </tr>

                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="txtbxName" placeholder="e.g Venus" required="required"></td>
                            </tr>

                            <tr>
                                <td>Address</td>
                                <td><input type="text" name="txtbxAdd" placeholder="" required="required"></td>
                            </tr>

                            <tr>
                                <td><button name="register">Create Account</button></td>
                            </tr>

                            <tr>
                                <td>Already a customer?<a href="login_details.php"> Login</td>
                            </tr>
                        </table>
                    </center>
                </form>
        </body>
    <head>
</html>