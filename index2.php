<!DOCTYPE html>
<htnl>
    <head>
        <title>index</title>
        <link rel="stylesheet" href="index2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--resposive for different size-->
    </head>
    <body>

		
            <ul>
            <li><img src="cart-59-48.png" href="#cart" id="cart"style="position: relative;top:50px; right: 10px;"></a></li>
                <li><div class="dropdown"style="position: relative;top:50px;right: 15px;">
                <button class="dropbtn">Products</button>
                    <div class="dropdown-content">
                        <a href="householdplastics.html">Household Products</a>
                        <a href="#">Furniture Plastics</a>
                        <a href="#">Fishing Tackle</a>
                        <a href="#">Kitchen Electronics</a>
                    </div></li>
                <li><a class="active" href="#home"style="position: relative;top:50px;right: 15px;">Home</a></li>
                <li><input type="search" id="search" name="search"placeholder="Search Produtcs" style="position: relative;top:50px;right: 15px;">
                <li>
                    <div id='button-search'>
                        <input type="image" img src='magnifying-glass-40x40.png' style="position: relative;top:50px;right: 15px;">
                    </div>
                </li>
                <img src="LogoMakr.png" id="logo">
            </ul>
  


    <div class="indHPlastic"style="position: relative;top:150px; left:500px">
        <a href="householdplastics.html">
            <img src="HomeImage/housejoldPlastic.png" id="inHouseP">
        </a>
    </div>
    
    <div class="indFPlastic"style="position: relative;top:150px; left:500px">
        <a href="default.asp">
            <img src="HomeImage/furnitureHome.png" id="inHouseF">
        </a>
    </div>
        
    <div class="indWrdbPlastic"style="position: relative;top:150px; left:500px">
        <a href="default.asp">
            <img src="HomeImage/wardrobe.png" id="inHouseWrdb">
        </a>
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