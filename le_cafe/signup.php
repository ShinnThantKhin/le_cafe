<?php

require "config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];   
    $confirmpassword = $_POST['confirmpassword'];

    if($password==$confirmpassword)
    {
        $query = "insert into user_profile values ('','$name','$username','$email','$password')";

        mysqli_query($conn,$query);
        echo "<script>alert('Sign Up is Successful! Please Log In. ')</script>";
        echo '<script>window.location="login.php"</script>';
    }
    else{
        echo  "<script>alert('Password Not Match.')</script>";
        echo '<script>window.location="signup.php"</script>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/signup.css">

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
    <title>Le café</title></head>
<body>
    <div class="signup">
        <h1>SIGN UP</h1><br><br>
        <form action="signup.php" method="post" class="signup-form">

            <!-- name -->
            <label for="name" style="font-size: 28px;">Name &ensp; &ensp; &ensp; &emsp; &ensp;  &ensp;:  &emsp;</label>
            <input id="name" name="name" type="name" class="fill_in" placeholder="Enter Name" autocomplete="off"/><br><br>

            <!-- user name -->
            <label for="username" style="font-size: 28px;">Username &ensp; &emsp;&ensp;  &ensp;:  &emsp;</label>
            <input id="username" name="username" type="text" class="fill_in"  placeholder="Enter Username" autocomplete="off"/><br><br>

            <!-- email -->
            <label for="email" style="font-size: 28px;">Email &emsp; &emsp; &ensp;  &ensp;  &ensp;: &emsp; </label>
            <input id="email" name="email" type="email" class="fill_in" placeholder="example@gmail.com" autocomplete="off"/><br><br>

            <!-- password -->
            <label for="password" style="font-size: 28px;">Password &ensp; &emsp; &ensp;  &ensp;: &emsp;</label>
            <input id="password" name="password" type="password" class="fill_in" placeholder="maximum 10 words" autocomplete="off"/><br><br>

            <!-- confirm password -->
            <label for="confirmpassword" style="font-size: 28px;">Confirm Password  : &emsp;</label>
            <input id="confirmpassword" name="confirmpassword" type="password" class="fill_in" placeholder="maximum 10 words" autocomplete="off"/><br><br>


            <a href="login.php">Already have account?</a>
            <button type="submit" name="submit" class="btn">Signup</button>
        </form>
    </div>
</body>
</html>