<?php
    session_start();
?>

<html>
    <head>
    <link rel="stylesheet" href="LoginStyle.css">
        <body>
            <!--<h3><center>Wholeseller Login</center></h3><br>
            <form method="post">
                    <center>
                        <table>
                            <tr>
                                <td>Phone Number</td>
                                <td><input type="text" name="txtbxPhoneNumber" placeholder="Phone Number" required="required"></td>
                            </tr>

                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="txtbxPassword" placeholder="Password" required="required"></td>
                            </tr>

                            <tr>
                                <td><input type="submit" name="login" value="Login"></td>
                                <td><input type="reset" value="Reset"></td>
                            </tr>

                            
                            <tr>
                                <td><a href="forgot.php">Forgot Password</td>
                            </tr>

                            <tr>
                                <td><a href="WholesellerAccInst.php">Signup</td>
                            </tr>
                        </table>
                    </center>
                </form>-->
                <div class="login-form">
                <form method="post">
                    <h1>Whole Seller Login</h1>
                    <div class="content">
                    <div class="input-field">
                        <input type="Numeric" name="txtbxPhoneNumber" placeholder="Phone Number" autocomplete="nope" required="required">
                    </div>
                    <div class="input-field">
                        <input type="password" name="txtbxPassword" placeholder="Password" autocomplete="new-password" required="required">
                    </div>
                    <a href="#" class="link">Forgot Your Password?</a>
                    </div>
                    <div class="action">
                    <button><a href="WholesellerAccInst.php">Register</a></button>
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
        $phonenumber=$_POST["txtbxPhoneNumber"];
        $password=$_POST["txtbxPassword"];
        //$HashPassword= md5($password);
        $_SESSION['txtbxPhoneNumber']=$phonenumber;

        $sql="SELECT * from wholesellertb where Phone_Number='$phonenumber' and W_Password='$password'";

        $result=mysqli_query($dbcon,$sql);

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            echo $_SESSION['user_id'] = $row['WholeSeller_Id'];
            header("Location: WholesellerItems.php");
        }
        else{
            echo "Sorry, your credentials are not valid";
        }

    /*    $row=mysqli_num_rows($result);

        if($row==1){
            header("Location: WholesellerItems.php");
        }
        else
            echo"<br>Sorry, your credentials are not valid";*/
    }
?>