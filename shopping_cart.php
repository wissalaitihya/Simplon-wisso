<?php
session_start();

if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = [];
}

if(isset($_POST["item"])){
    $item = $_POST["item"];
    

     if(!in_array($item, $_SESSION["cart"])){
     $_SESSION["cart"][] = $item;
     }
     header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h2>Cart: <?php echo count($_SESSION["cart"]);?>Items</h2>
<h3>Products :</h3>
<form method="POST"> 
<p>Phone</p>
<button type="submit" name="item" value="Phone">Add to cart</button>
</form>

<form method="POST"> 
<p>Laptop</p>
<button type="submit" name="item" value="Laptop">Add to cart</button>
</form>

<form method="POST"> 
<p>Headphone</p>
<button type="submit" name="item" value="Headphone">Add to cart</button>
</form>
</body>
</html>

