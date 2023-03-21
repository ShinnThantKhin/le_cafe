<?php
require("lock.php");
require_once ('./php/component.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/menu.css">


    <!-- Font -->
    <!-- Dancing Script -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
    <!--Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Logo -->
    <link rel="icon" href="./img/logo.png">
    <title>Le café</title>
</head>
<body>
    <!-- NAV -->
    <nav>
        <section class="et-hero-tabs" onclick="StickyNavigation()">
            <div style="display: inline-block;">
                <a href="home.php"><img src="./img/logo.png" alt="logo" class="logo-img"></a>
            </div>
            <div style="display: inline-block;">
                <a href="home.php"><h1 class="logo-font">Le café</h1></a>
            </div>
            <div class="et-hero-tabs-container">
            <a class="pg-tab" href="shop.php">LOCATIONS</a>
				<a class="pg-tab" href="reservation.php">RESERVATION</a>
            	<a class="pg-tab" href="home.php">HOME</a>
                <a class="pg-tab" href="menu.php">MENU</a>
                <a class="pg-tab" href="onlineorder.php">ORDER ONLINE</a>

                <button class="pg-tab butn" onclick=asklogout()><i class="fa-solid fa-2x fa-circle-user"></i></button>
                <div class="popup" id="topopup" style=>
                    <a href="logout.php"><button type="button" class="btn1">Logout</button></a>
                    <button type="button" class="btn1 cancel" onclick="closeForm()">Close</button>
                </div>
                <script>
                    function asklogout(){
                        document.getElementById("topopup").style.display = "block";
                    }
                    function closeForm() {
                        document.getElementById("topopup").style.display = "none";
                    }
                </script>
            </div>
        </section>
    </nav>

    <div class="menu">
        <h1><i>MENU</i></h1>
        <div>
            <a href="#burger"><div class="card">
                <img src="./img/burger.png" class="menu-img" alt="burger">
                <h2>BURGER</h2>
            </div></a>
            <a href="#sandwich"><div class="card">
                <img src="./img/sandwich.png" class="menu-img" alt="sandwich">
                <h2>SANDWICH</h2>
            </div></a>
            <a href="#toast"><div class="card">
                <img src="./img/toastwchoco.png" class="menu-img" alt="toast">
                <h2>TOAST</h2>
            </div></a>
            <a href="#waffle"><div class="card">
                <img src="./img/waffle.png" class="menu-img" alt="waffle">
                <h2>WAFFLE</h2>
            </div></a>
        </div>
        <div>
            <a href="#coffee"><div class="card">
                <img src="./img/cofe.png" class="menu-img" alt="coffee">
                <h2>COFFEE</h2>
            </div></a>
            <a href="#tea"><div class="card">
                <img src="./img/tea.png" class="menu-img" alt="tea">
                <h2>TEA</h2>
            </div></a>
            <a href="#juice"><div class="card">
                <img src="./img/orgjuice.png" class="menu-img" alt="juice">
                <h2>JUICE</h2>
            </div></a>
        </div>
    </div>

    <!-- BURGER -->
    <div id="burger" class="burger1">
        <h1><i>BURGERS</i></h1>
        <div>
            <?php
                menu(productname:"HAMBURGER",productprice:"3500.00",productimg:"./img/burger.png");
                menu(productname:"CHEESE BURGER",productprice:"4500.00",productimg:"./img/chesseburger.png");
            ?>
        </div>
        <div>
            <?php
                menu(productname:"CHICKEN BURGER",productprice:"4000.00",productimg:"./img/chicken.png");
                menu(productname:"VEGGIE BURGER",productprice:"5500.00",productimg:"./img/veggie.png");
            ?>
        </div>
    </div>

    <!-- SANDWICH -->
    <div id="sandwich" class="burger1">
        <h1><i>SANDWICHES</i></h1>
        <div>
            <?php
                menu(productname:"HAM & EGG",productprice:"3000.00",productimg:"./img/sandwich.png");
                menu(productname:"CHICKEN & CHEESE",productprice:"3000.00",productimg:"./img/harmncheese.png");
            ?>
        </div>
        <div>
            <?php
                menu(productname:"TUNA & SALAD",productprice:"3500.00",productimg:"./img/sandwich3.png");
                menu(productname:"ROAST BEEF",productprice:"5000.00",productimg:"./img/sandwich4.png");
            ?>
        </div>
    </div>

    <!-- TOAST -->
    <div id="toast" class="burger1">
        <h1><i>TOASTS</i></h1>
        <div>
            <?php
                menu(productname:"FRENCH TOAST",productprice:"3000.00",productimg:"./img/toast.png");
                menu(productname:"AVOCADO & EGG",productprice:"4000.00",productimg:"./img/toast4.png");
            ?>
        </div>
        <div>
            <?php
                menu(productname:"CREAM CHEESE & CURED SOLMON",productprice:"4500.00",productimg:"./img/toast2.png");
                menu(productname:"BACON, MUSHROOM & CARMELIZED ONIONS",productprice:"5500.00",productimg:"./img/toast3.png");
            ?>
        </div>
    </div>

    <!-- WAFFLE -->
    <div id="waffle" class="burger1">
        <h1><i>WAFFLES</i></h1>
        <div>
            <?php
                menu(productname:"PLAIN WAFFLE",productprice:"2500.00",productimg:"./img/waffle1.png");
                menu(productname:"ICE-CREAM SANDWICH",productprice:"3000.00",productimg:"./img/waffle2.png");
            ?>
        </div>
        <div>
            <?php
                menu(productname:"THE ULTIMATE STRAWBERRY",productprice:"4000.00",productimg:"./img/waffle.png");
                menu(productname:"PEANUT BUTTER WAFFLE",productprice:"3000.00",productimg:"./img/waffle3.png");
            ?>
        </div>
    </div>

    <!-- COFFEE -->
    <div id="coffee" class="burger1">
        <h1><i>COFFEE</i></h1>
        <div>
            <?php
                menu(productname:"LATTE",productprice:"3000.00",productimg:"./img/latte.png");
                menu(productname:"AMERICANO",productprice:"2500.00",productimg:"./img/americano.png");
            ?>
        </div>
        <div>
            <?php
                menu(productname:"MOCHA",productprice:"4000.00",productimg:"./img/mocha.png");
                menu(productname:"BLACK",productprice:"3000.00",productimg:"./img/black.png");
            ?>
        </div>
    </div>

    <!-- TEA -->
    <div id="tea" class="burger1">
        <h1><i>TEA</i></h1>
        <div>
            <?php
                menu(productname:"MILK TEA",productprice:"3500.00",productimg:"./img/milktea.png");
                menu(productname:"THAI TEA",productprice:"3500.00",productimg:"./img/thaitea.png");
            ?>
        </div>
        <div>
            <?php
                menu(productname:"GREEN TEA",productprice:"4000.00",productimg:"./img/green.png");
                menu(productname:"HERBAL TEA",productprice:"4500.00",productimg:"./img/herbal.png");
            ?>
        </div>
    </div>


    <!-- JUICE -->
    <div id="juice" class="burger1">
        <h1><i>JUICE</i></h1>
        <div>
            <?php
                menu(productname:"ORANGE JUICE",productprice:"2800.00",productimg:"./img/orgjuice.png");
                menu(productname:"DETOX",productprice:"4200.00",productimg:"./img/detox.png");
            ?>
        </div>
        <div>
            <?php
                menu(productname:"LEON GREEN",productprice:"3500.00",productimg:"./img/leongreen.png");
                menu(productname:"STRAWBERRY JUICE",productprice:"2800.00",productimg:"./img/stwjuice.png");
            ?>
        </div>
    </div>

    

    <!-- Footer -->
    <div class="footer">
        <div class="social">
            <i class="fa-brands fa-square-facebook" style="color:#3b5998; padding: 5px;"></i>
            <i class="fa-brands fa-square-instagram" style="padding: 5px; color: transparent; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);  background-clip: text; -webkit-background-clip: text;"></i>
            <i class="fa-brands fa-square-twitter" style="color: #00acee; padding: 5px;"></i>
        </div>
        <div>
            <h2>CONNET WITH US!</h2>
            <h2>----------</h2>
            <h2> &copy;2022 Le café - All Rights Reserved</h2>
        </div>
    </div>
</body>