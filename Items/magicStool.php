<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="magicStool.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="magicStool.js"></script>
    <title>Document</title>
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
    <a href="index2.php"><img src="LogoMakr.png" id="logo" style="position:relative; bottom: 60px; left:50px; height:60px; width:100px"></a> 
    <div class="item"style="position:relative; bottom:60px">
        <h1>Magic Stool</h1>
        <div class="imgMagicStool">
            <img src="plastichoiuseware/Stool/H1_04.png"id="idH1_04" alt="Magic Stool">
            <div class="star">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></i>
            </div>
            <h3>&#8377;-000</h3><!--&#8377 is the ascii code for rupee sign-->
            Quantity:
                <button id="increment-btn" onclick="increment()">+</button>
                <input type="text" id="count-el" value="">
                <button id="decrement-btn" onclick="decrement()">-</button>
    
 
        </div>
           <div class="description" >
               <p>This stool was brought from -----. It is a multipurpose stool.....
                A stool is one of the earliest forms of seat furniture. It bears many 
                similarities to a chair. It consists of a single seat, for one person,
                without back or armrests (in early stools), on a base of a stool there 
                are either one , two, three or four legs. A stool is generally
                distinguished from chairss by their lack of arms and a back. Variants
                exist with one, two or five legs and these various stools are referred 
                to by some people as "backless chairs". Some modern stools have backs.
                Folding stools can become flat, typically by rotating the seat to be 
                parallel with fold-up legs. 
               </p>
           </div>
           <div class="button"style="position:relative; bottom:1000px;left:1050px;">
                <button id="btn-shop">continue shopping</button><br>
                <button id="btn-cart">Add to cart</button><br> 
                <button id="btn-buy">Buy Now</button><br>
           </div>
    </div>
</body>
</html>