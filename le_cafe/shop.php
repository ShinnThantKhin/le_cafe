<?php
require("lock.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/shop.css">

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

    <!-- Shop1 -->
    <div class="shop1">
        <div class="s1"> 
            <img src="./img/shop1.png" alt="shop1" class="shop-img">
            <h2><i>Shop-1 Location</i><br>No.(1), Lorem Street, Lorem Township, Yangon <br>Phone: 0987654321, 0912345678 <br>Email : cafeone@gmail.com <br><i>Hours</i><br> Open Daily : 9AM to 6PM</h2>
        </div>
    </div>

    <!-- Shop2 -->
    <div class="shop1">
        <div class="s1"> 
            <img src="./img/shop2.png" alt="shop2" class="shop-img">
            <h2><i>Shop-2 Location</i><br>No.(59), Lorem Street, Lorem Township, Yangon <br>Phone: 0913578642, 0924687531 <br>Email : cafetwo@gmail.com <br><i>Hours</i><br> Monday - Saturday : 9AM to 6PM <br> Sunday : Closed</h2>

        </div>
    </div>

    <!-- Shop3 -->
    <div class="shop1">
        <div class="s1"> 
            <img src="./img/shop3.png" alt="shop1" class="shop-img">
            <h2><i>Shop-3 Location</i><br>No.(124), Lorem Street, Lorem Township, Yangon <br>Phone: 0956784321, 0945632871 <br>Email : cafethree@gmail.com <br><i>Hours</i><br> Monday - Saturday : 10AM to 5PM <br> Sunday : Closed</h2>
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