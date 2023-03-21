<?php

//include("config.php");
require("lock.php");


if(isset($_POST['submit'])){
    $people = $_POST['people'];
    $reserved_date = $_POST['reserved_date'];
    $reserved_time = $_POST['reserved_time'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    


    $query = "insert into reservation values ('','$people','$reserved_date','$reserved_time','$name','$phone','$email')";

    mysqli_query($conn,$query);
    echo "<script>alert('Your Reservation is Successful')</script>";
    echo '<script>window.location="reservation.php"</script>';
		

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/reservation.css">


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

    <div class="reserved">
        <h2><i>RESERVATION</i></h2><br>
        <h3><i>Reservations are available for the opening days during opening hours. <br><br>Reservation must be placed at least 1 day in advance. <br><br> For reservations of 9+ guests, please contact through mail or phone.</i></h3><br><br>
        <h4>Make a Reservation</h4><br><br>
        <form action="reservation.php" method="post">

            <label for="people"><i class="fa-solid fa-3x fa-users" style="color: grey;"></i></label>
            <select name="people" id="people" class="dropdown">
                <option value="1">1 People</option>
                <option value="2">2 People</option>
                <option value="3">3 People</option>
                <option value="4">4 People</option>
                <option value="5">5 People</option>
                <option value="6">6 People</option>
                <option value="7">7 People</option>
                <option value="8">8 People</option>
                <option value="9">9 People</option>
            </select>

            <label for="reserved_date"><i class="fa-solid fa-3x fa-id-card-clip" style="color: grey; margin-left:20px;"></i></label>
            <input type="date" id="reserved_date" name="reserved_date" class="calender">

            <label for="reserved_time"><i class="fa-solid fa-3x fa-user-clock" style="color: grey; margin-left:20px;"></i></label>
            <select name="reserved_time" id="reserved_time" class="dropdown">
                <option value="10">10:00AM</option>
                <option value="11">11:00AM</option>
                <option value="12">12:00PM</option>
                <option value="1">1:00PM</option>
                <option value="2">2:00PM</option>
                <option value="3">3:00PM</option>
                <option value="4">4:00PM</option>
            </select><br><br>

            <label for="name" style="font-size: 28px;">Name : </label>
            <input id="name" name="name" type="text" class="fill_in"  placeholder="Enter Your Name" autocomplete="off"/><br>

            <label for="phone" style="font-size: 28px;">Phone : </label>
            <input id="phone" name="phone" type="text" class="fill_in" placeholder="09XXXXXXXXX" autocomplete="off"/><br>

            <label for="email" style="font-size: 28px;">Email : </label>
            <input id="email" name="email" type="email" class="fill_in" placeholder="example@gmail.com" autocomplete="off"/><br><br>

            <button type="submit" name="submit" class="btn">Find Table</button>
        </form>
    </div>

    <div>
        <img src="./img/cafeimg.jpg" alt="cafe" class="img">
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