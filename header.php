<header id="header">
    <!--
    <div class="navbar">
        <ul>
             The form -->
           <!-- <form class="search" action="action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">
                <div class="binoculars">
                <i class="bi bi-binoculars-fill"></i>
                </div>
            </button>
    
            <a href="SignUp.php" id="Idaccount">SignUp</a>
            <a href="login_details.php" id="Idlogin" >Login</a>
            <a href="About.html" id="btnUser"span i class="fa fa-fw fa-user" ></i></a></span>
            <a href="#" id="btnCart" span i class="bi bi-bag-plus-fill"></i></a></span>
                
            <a href="logout.php" id="btnLogout" span i class="bi bi-power"></i></span></a>
            </form> 
        </ul>
    </div>
     
    <div class="logoWrapper" >
        <img src="Items/LogoMakr.png" id="logo"> 
    </div>-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="Shop.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i>Shopping
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMarkup"
                aria-conttrols="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle Navigation"
            >
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="bi bi-bag-plus-fill"></i>Cart
                        <?php
                            if(isset($_SESSION['cart'])){
                                $count=count($_SESSION['cart']);
                                echo"<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                            }else{
                                echo"<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }
                        ?>
                    </h5>
                </a>
            </div>
        </div>
    </nav>
</header>



