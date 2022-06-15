<?php
    /*session_start();
    if (!isset($_SESSION['txtbxUsername']))
    header('Location: login_details.php');
    */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <link rel="stylesheet" href="HomePage.css">
        <script src="HomePage.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--resposive for different size-->
                     <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <!-- The form -->
                <form class="search" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">
                    <div class="binoculars">
                    <i class="bi bi-binoculars-fill"></i>
                    </div></button>
    
                <a href="RSignUp.php" id="Idaccount">SignUp</a>
                <a href="Rlogin_details.php" id="Idlogin" >Login</a>
                <a href="Admin_Panel.php" id="btnUser"span i class="fa fa-fw fa-user" ></i></a></span>
                <a href="cart.php" id="btnCart" span i class="bi bi-bag-plus-fill"></i></a></span>
                <a href="logout.php" id="btnLogout" span i class="bi bi-power"></i></span></a>
                </form> 
            </ul>
        </div>
     
            <div class="logoWrapper" >
                <img src="Items/LogoMakr.png" id="logo"> 
            </div>
  
       
        
        <div class="SliderBody">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                
                    <!--Starting of slides-->
                    <div class="slide first">
                        <img src="Slides/slideBucket.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="Slides/slideRack.png" alt="HomeWardrobe">
                    </div>
                    <div class="slide">
                        <img src="Slides/slideWardrobe.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="Slides/wardrobe.png" alt="">
                    </div>
                    <!--Ending of slides-->

                    <!--Automatic navigation of slides-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                    <!--manual navigation of slides-->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
            </div>
        </div>
        <a  href="Shop.php"><button id="btn-liquid">
            <span><b>Shop</b></span>
            <div class="liquid"></div>
        </button></a>

        <a  href="WholesellerAccInst.php"><button id="btn-liquid">
            <span><b>Wholeseller</b></span>
            <div class="liquid"></div>
        </button></a>
        <footer>
            <br><div class="whatsapp"><i class="bi bi-whatsapp">&nbsp; 6909118384</i><br></div>
            <div class="telephone"><i class="bi bi-telephone-fill">&nbsp;&nbsp;9862681385</i><br></div>
            <h5 id="sign">Design by: Laso</h5>
                <h5 id="hire">To hire a Web Developer:&nbsp;<i class="bi bi-envelope"><i>&nbsp;thomlinpjlaso@gmail.com</i></i></h5>
        </footer>
    </body>
</html>
