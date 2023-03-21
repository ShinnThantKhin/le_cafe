<?php
        include("config.php");
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $myusername=mysqli_real_escape_string($conn,$_POST['name']);
            $mypassword=mysqli_real_escape_string($conn,$_POST['password']);
            
            $sql="SELECT id FROM `user_profile` WHERE username='$myusername' and password='$mypassword'";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            echo $count;
            if($count==1){
                $_SESSION['login_user']=$myusername;
                header("LOCATION:welcome.php");
                
            }
            else{
                echo "<script>alert('Your login Name or Password is invalid ')</script>";
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
    <link rel="stylesheet" href="./css/login.css">

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
    <div class="login">
        <h1>LOG IN</h1><br><br>
        <form action="login.php" method="post" class="login-form">

            <!-- user name -->
            <label for="name" style="font-size: 28px;">Username : </label>
            <input id="name" name="name" type="text" class="fill_in"  placeholder="Enter Username" autocomplete="off"/><br><br>

            <!-- password -->
            <label for="password" style="font-size: 28px;">Password : </label>
            <input id="password" name="password" type="password" class="fill_in" placeholder="Enter Password" autocomplete="off"/><br><br>
            <a href="changepassword.php">Change Password</a>
            <br><br><br>

            <a href="signup.php">Don't have account?</a>
            <button type="submit" name="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>