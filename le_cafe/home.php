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
            <div style="display: flex;">
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
   
    <!-- Body Div -->
    <div class="img-to-slide">
        <div class="img-sliders">
            <div class="img-slides">
                <input type="radio" name="radio-btn" class="btn-to-hide" id="radio1">
                <input type="radio" name="radio-btn" class="btn-to-hide" id="radio2">
                <input type="radio" name="radio-btn" class="btn-to-hide" id="radio3">
                <input type="radio" name="radio-btn" class="btn-to-hide" id="radio4">
                <input type="radio" name="radio-btn" class="btn-to-hide" id="radio5">
                <div class="slide first">
                    <img src="./img/slide_img_1.jpg" class="slide-img" alt="">
                </div>
                <div class="slide">
                    <img src="./img/slide_img_2.jpg" class="slide-img" alt="">
                </div>
                <div class="slide">
                    <img src="./img/slide_img_3.jpg" class="slide-img" alt="">
                </div>
                <div class="slide">
                    <img src="./img/slide_img_4.jpg" class="slide-img" alt="">
                </div>
                <div class="slide">
                    <img src="./img/slide_img_5.jpg" class="slide-img" alt="">
                </div>

                <div class="slide-nav-auto">
                    <div class="auto-btn-1 btn-to-hide"></div>
                    <div class="auto-btn-2 btn-to-hide"></div>
                    <div class="auto-btn-3 btn-to-hide"></div>
                    <div class="auto-btn-4 btn-to-hide"></div>
                    <div class="auto-btn-5 btn-to-hide"></div>
                </div>

                <div class="slide-nav-man">
                    <label for="radio1" class="man-btn1"></label>
                    <label for="radio2" class="man-btn2"></label>
                    <label for="radio3" class="man-btn3"></label>
                    <label for="radio4" class="man-btn4"></label>
                    <label for="radio5" class="man-btn5"></label>
                </div>
            </div>
        </div>
    </div>

    <script>
        var counter = 1;
        setInterval(function()  {
        document.getElementById('radio'+ counter).checked = true;
        counter++; 

        if(counter>4){
            counter=1
        }

        }, 5000);
    </script>
    <!-- Body 1 -->
    <div class="card-height">
        <div class="body-pt1">
            
            <div class="slogan">
                <img src="./img/img1.png" alt="Coffee" class="coffee-img">
            </div>
            <div class="slogan">
                <h1 style="font-size: 3rem;">About Us</h1>
                <h2>-Welcome to Le Café-<br> Our casual atmosphere, quality food, friendly staff and attentive service are what we have become known for and keeps our customers coming back and back again.<br><br>We look forward to serving you!</h2>
                <button class="menu-btn"><a href="home.php" class="menu-a">Home</a></button>
            </div>
            
        </div>
    </div>


    <!-- Body 2 -->
    <div class="card-height">
        <div class="body-pt2">
            
            <div class="slogan">
                <h1 style="font-size: 3rem;">We Love Coffee!</h1>
                <h2>Coffee is a drink prepared from roasted coffee beans. Darkly colored, bitter, and slightly acidic, coffee has a stimulating effect on humans, primarily due to its caffeine content. It is the most popular hot drink in the world. Seeds of the Coffea plant's fruits are separated to produce unroasted green coffee beans.</h2>
                <button class="menu-btn"><a href="menu.php" class="menu-a">Explore Menu</a></button>
            </div>
            <div class="slogan">
                <img src="./img/pngwing.com(2).png" alt="Coffee" class="coffee-img1">
            </div>
            
        </div>
    </div>

    <!-- Body 3 -->
    <div class="card-height">
        <div class="body-pt3">

            <div class="slogan">
                <img src="./img/table.png" alt="Coffee" class="coffee-img1">
            </div>
            
            <div class="slogan">
                <h1 style="font-size: 3rem;">Online Reservation</h1>
                <h2>WE ARE HAPPY TO HELP YOU PLAN YOUR EVENT!</h2>
                <h2>Thank you for expressing interest with us. We have received your inquiry and will process your information. One of our representatives will be contacting you promptly.</h2>
                <button class="menu-btn3"><a href="reservation.php" class="menu-a">Make Reservation</a></button>
            </div>
            
        </div>
    </div>

    <!-- Body 4-->
    <div class="card-height">
        <div class="body-pt4">
            
            <div class="slogan">
                <h1 style="font-size: 3rem;">Online Food Order</h1>
                <h2>HUNGRY? ORDER FOR PICKUP OR DELIVERY!</h2>
                <h2>Online food ordering allows customers to place an order at virtually any time, from anywhere, saving the time and resources typically spent on travelling to pick up a meal.</h2>
                <button class="menu-btn4"><a href="onlineorder.php" class="menu-a">To Order</a></button>
            </div>
            <div class="slogan">
                <img src="./img/cafe deli.png" alt="Coffee" class="coffee-img1">
            </div>
            
        </div>
    </div>

    <!-- Body 5 -->
    <div class="card-height">
        <div class="body-pt5">

            <div class="slogan">
                <img src="./img/shop.png" alt="Coffee" class="coffee-img1">
            </div>
            
            <div class="slogan">
                <h1 style="font-size: 3rem;">Café Locations</h1>
                <h2>Established in 2020, a family-owned and operated café located in Yagon, have 3 shops.</h2>
                <h2>Our casual atmosphere, quality food, friendly staff and attentive service are what we have become known for and keeps our customers coming back and back again.</h2>
                <button class="menu-btn5"><a href="shop.php" class="menu-a">See Shops</a></button>
            </div>
            
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
</html>