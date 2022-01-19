<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <link rel="stylesheet" href="index2.css">
        <script src="index2.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--resposive for different size-->
                     <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <!-- The form -->
                <form class="search" action="action_page.php" style="position: relative;top:10px;left: 400px;">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
    
                <a href="#" id="Idaccount"style="font-size:30px;position:relative; bottom:10px;">CreateAccount</a>
                <a href="#" id="Idlogin" style="font-size:30px;position:relative; bottom:10px;">Login</a>
                <span a href="#" i class="fa fa-fw fa-user" style="font-size:45px;position:relative; bottom:8px;"></i></a></span>
                <span a href="#" i class="bi bi-bag-plus-fill"style="font-size:45px;position:relative; bottom:8px;"></i></a></span>
                </form> 
            </ul>
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
                        <img src="Slides/slideWardrobe.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="Slides/slideRack.png" alt="">
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
        <img src="LogoMakr.png" id="logo" style="position:relative; bottom: 660px; left:50px; height:60px; width:100px">   
    

        <div class="HomeItems"style="position: relative;">
            <div class="indHPlastic"style="position: relative; bottom:1px">
                <a href="householdplastics.html">
                    <img src="HomeImage/housejoldPlastic.png" id="inHouseP">
                </a>
            </div>
            
            <div class="indFPlastic"style="position: relative;bottom:465px; left:445px">
                <a href="default.asp">
                    <img src="HomeImage/furnitureHome.png" id="inHouseF">
                </a>
            </div>

            <div class="indWrdbPlastic"style="position: relative;bottom:929px; left:900px">
                <a href="default.asp">
                    <img src="HomeImage/homeWardrobe.png" id="inHouseWrdb">
                </a> 
            </div>
        </div>
    
    </body>
</html>
<?php
                    $search = $_POST['search'];
                    $search = "www.google.com";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM
                    
                    //IF WORD FOUND IN HOME PAGE
                    if (stripos($home, $search) !== false) {//USING EXAMPLE.COM TO SHOW IT WORKS
                        echo '<a href="'.$homePageName.'">'.$homePageName.'</a>';
                    }
                    ?>