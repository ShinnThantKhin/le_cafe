<?php

require "config.php";


if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];

        $sql = "SELECT * FROM user_profile WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $count=mysqli_num_rows($res);
            
            if($count==1)
            {
                
                if($newpassword==$confirmpassword)
                {
                    $sql2 = "UPDATE user_profile SET
                    password='$newpassword'
                    WHERE username='$username'
                    ";

                    $res2 = mysqli_query($conn, $sql2);

                    if ($res2==true)
                    {
                        
                        echo "<script>alert('Password Changed Successfully.  Please Login Again.')</script>";                    
                        echo '<script>window.location="login.php"</script>';
                        
                    }
                    else
                    {
                        
                        echo  "<script>alert('Failed to change password. ')</script>";
                        echo '<script>window.location="changepassword.php"</script>';
    
                    }
                }
                else
                {
                    echo  "<script>alert('Password Not Match.')</script>";
                    echo '<script>window.location="changepassword.php"</script>';

                }
            }
            else
            {
                echo  "<script>alert('User Not Found.')</script>";
                echo '<script>window.location="changepassword.php"</script>';

            }

            
        }

        
    }
// if($_SERVER["REQUEST_METHOD"]=="POST"){
	
// 	$username=$_POST['username'];
// 	$password=$_POST['password'];
// 	$newpassword=$_POST['newpassword'];

//     $result = $conn->query($sql);

//     $user = $result->fetch_assoc();



//     if($user) {

//         if($_POST["password"] === $user["password_hash"]){
	
// 	$sql="UPDATE `user_profile` SET `password`='$newpassword', WHERE `username`='$username' ";
// 	$result=mysqli_query($conn,$sql);
//     echo "<script>alert('Changing Password is Successful! Please Log In Again. ')</script>";
// 	header("LOCATION:login.php");
//         }
// 	}
// }
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
        <h1>Change Password</h1><br><br>
        <form action="changepassword.php" method="post" class="signup-form">

            <!-- user name -->
            <label for="username" style="font-size: 28px;">Username &ensp; &emsp; &nbsp; &emsp;:  &emsp;</label>
            <input id="username" name="username" type="text" class="fill_in"  placeholder="Enter Username" autocomplete="off"/><br><br>

            <!-- password -->
            <label for="password" style="font-size: 28px;">Password &ensp; &emsp;  &nbsp;  &emsp;: &emsp;</label>
            <input id="password" name="password" type="password" class="fill_in" placeholder="maximum 10 words" autocomplete="off"/><br><br>

            <!-- new password -->
            <label for="newpassword" style="font-size: 28px;">New Password  &emsp; : &emsp;</label>
            <input id="newpassword" name="newpassword" type="password" class="fill_in" placeholder="maximum 10 words" autocomplete="off"/><br><br>

            <!-- confirm password -->
            <label for="confirmpassword" style="font-size: 28px;">Confirm Password  : &emsp;</label>
            <input id="confirmpassword" name="confirmpassword" type="password" class="fill_in" placeholder="maximum 10 words" autocomplete="off"/><br><br>


            <a href="login.php">Just Login?</a>
            <button type="submit" name="submit" class="btn">Confirm</button>
        </form>
    </div>
</body>
</html>