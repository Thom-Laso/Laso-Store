<?php
    session_start();
?>

<html>
    <head>
        <body>
            <h3><center>Login</center></h3><br>
            <form method="post">
                    <center>
                        <table>
                            <tr>
                                <td>Phone Number</td>
                                <td><input type="text" name="txtbxRPhoneNumber" placeholder="Phone Number" required="required"></td>
                            </tr>

                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="txtbxRPassword" placeholder="Password" required="required"></td>
                            </tr>

                            <tr>
                                <td><input type="submit" name="login" value="Login"></td>
                                <td><input type="reset" value="Reset"></td>
                            </tr>

                            
                            <tr>
                                <td><a href="forgot.php">Forgot Password</td>
                            </tr>

                            <tr>
                                <td><a href="RSignUp.php">Signup</td>
                            </tr>
                        </table>
                    </center>
                </form>
        </body>
    </head>
</html>

<?php
    require "connection.php";
    if(isset($_POST['login'])){
        $phonenumber=$_POST["txtbxRPhoneNumber"];
        $password=$_POST["txtbxRPassword"];
        $_SESSION['txtbxRPhoneNumber']=$phonenumber;

        $sql="select * from retailertb where rPhone_Number='$phonenumber' and rPassword='$password'";

        $result=mysqli_query($dbcon,$sql);

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            echo $_SESSION['user_id'] = $row['Retailer_Id'];
            header("Location: Shop.php");
        }
        else{
            echo "Sorry, your credentials are not valid";
        }

        //$row=mysqli_num_rows($result);

        /*if($row==1){
            
        }
        else
            echo"<br>Sorry, your credentials are not valid";*/
        
    }
?>