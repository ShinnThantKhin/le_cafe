<?php

//session_start();

require("lock.php");

$connect = mysqli_connect("localhost", "root", "", "le_cafe");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="onlineorder.php"</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="onlineorder.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/order.css">

    <!-- Bootstrap -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->


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

    <!-- ORDER MENU -->
    <div class="burger1">
        <h1 style="font-size: 50px;"><i>ORDER MENU</i></h1>
        <div>
            <?php
				$query = "SELECT * FROM order_online ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
                    {
			?>
            <div class="card1">
                <form method="post" action="onlineorder.php?action=add&id=<?php echo $row["id"]; ?>">
                <div>
                    <img src="<?php echo $row["product_image"]; ?>" class="menu-img1">
                    <h4><?php echo $row ["product_name"]; ?> <br><br> Price : <?php echo $row["product_price"]; ?> ks</h4><br><br>
                    <input type="text" name="quantity" value="1" class="form-control1" />
                    <br><br>
					<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />

					<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />

					<input type="submit" name="add_to_cart" style="" class="btn" value="Add to Cart" />
                </div>
                </form>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>

    <div class="details">
			<h3><i>Order Details</i></h3>
			<div class="table">
				<table class="table-border">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="onlineorder.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span>Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="center">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
            <div style="text-align: center; padding: 30px; margin: 10px 30px auto auto;">
                <a href="paymentform.php" class="btn" style="text-align: center; margin-left:800px;"><span>Payment</span></a></td>
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