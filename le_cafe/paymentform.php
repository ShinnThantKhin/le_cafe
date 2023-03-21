<?php


require("lock.php");
//require "config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $cardtype = $_POST['cardtype'];
    $cardnumber = $_POST['cardnumber'];
    $secure = $_POST['secure'];
    $namecard = $_POST['namecard'];



    $query = "insert into payment values ('','$name','$email','$phone','$address','$city','$country','$cardtype','$cardnumber','$secure','$namecard')";

    mysqli_query($conn,$query);
    echo "<script>alert('Your Payment is Successful')</script>";
    echo '<script>window.location="onlineorder.php"</script>';
		

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <link rel="stylesheet" href="./css/paymentform.css">


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
    
    <form id="payment" method="post" action="paymentform.php" style="border: 5px solid rgb(49, 43, 43);">
        <fieldset>
        <legend>Your Details</legend>
        <ol>
            <li>  
            <label for="name" style="font-size: 18px">Name</label>
                <input id="name" name="name" type="text" placeholder="Enter Name" autocomplete="off" autofocus/>
            </li>
            <li>
                <label for="email" style="font-size: 18px">Email</label>
                <input id="email" name="email" type="text" placeholder="example@gmail.com" autocomplete="off" />
            </li>
            <li>
                <label for="phone" style="font-size: 18px">Phone</label>
                <input id="phone" name="phone" type="tel" placeholder="09########" autocomplete="off">
            </li>
        </ol>
        </fieldset>
        <fieldset>
        <legend>Delivery Address</legend>
        <ol>
            <li>
            <label for="address" style="font-size: 18px">Address</label>
            <textarea id="address" name="address" rows="5" placeholder="Address" autocomplete="off"></textarea>
            </li>
            <li>
            <label for="postalcode" style="font-size: 18px">City</label>
            <input id="postalcode" name="city" type="text" placeholder="City" autocomplete="off"/>
            </li>
            <li>
            <label for="country" style="font-size: 18px">Country</label>
            <input id="country" name="country" type="text" placeholder="Country" autocomplete="off"/>
            </li>
        </ol>
        </fieldset>
        <fieldset>
        <legend>Card Details</legend>
        <ol>
            <li>
                <fieldset>
                <legend>Card Type</legend>
                <ol>
                    <li>
                    <input id="visa" name="cardtype" type="radio" value="v" />
                    <label for="visa" style="font-size: 18px">visa</label>
                </li>
                    <li>
                        <input id="amex" name="cardtype" type="radio" value="k" />
                    <label for="amex" style="font-size: 18px">Kpay</label>
                    </li>
                    <li>
                        <input id="mastercard" name="cardtype" type="radio" value="m" />
                    <label for="mastercard" style="font-size: 18px">Mastercard</label>
                    </li>
                
                </ol>
                </fieldset>
            </li>
            <li>
            <label for="cardnumber" style="font-size: 18px">Card Number</label>
            <input id="cardnumber" name="cardnumber" type="number" autocomplete="off"/>
            </li>
            <li>
            <label for="secure" style="font-size: 18px">Security Code</label>
            <input id="secure" name="secure" type="number" autocomplete="off"/>
            </li>
            <li>
            <label for="namecard" style="font-size: 18px">Name on Card</label>
            <input id="namecard" name="namecard" type="text" autocomplete="off"/>
            </li>
            </ol>
        </fieldset>
        <fieldset>
            <button type="submit" name="submit">Pay Now</button>
        </fieldset>
    </form>