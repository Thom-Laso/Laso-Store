<?php
    session_start();
?>

<html>
    <head>
    <link rel="stylesheet" href="LoginStyle.css">

        <body>
           <!-- <h3><center>Retailer Login</center></h3><br>
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
                </form> -->
            <div class="login-form">
                <form method="post">
                    <h1>Retailer Login</h1>
                    <div class="content">
                    <div class="input-field">
                        <input type="Numeric" name="txtbxRPhoneNumber" placeholder="Phone Number" autocomplete="nope" required="required">
                    </div>
                    <div class="input-field">
                        <input type="password" name="txtbxRPassword" placeholder="Password" autocomplete="new-password" required="required">
                    </div>
                    <a href="#" class="link">Forgot Your Password?</a>
                    </div>
                    <div class="action">
                    <button><a href="RSignUp.php">Register</a></button>
                    <button name="login">Login</button>
                    </div>
                </form>
            </div>
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