<?php
setcookie("cart", time() + 86400);
// this is the associative array for our shopping cart 
$cart = [];


// check if the cookie for shopping cart has been set (you can choose the name)
// if it's been set, overwrite $cart variable with it. The easiest way to switch between array and string is to use JSON.
// so e.g. $cart = json_decode($_COOKIE["cart"], true); if (isset ($_COOKIE["cart"])){

if (isset($_COOKIE["cart"])) {
    $cart = json_decode($_COOKIE["cart"], true);
}

// check if the add form has been sent

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if yes, add the new product to the $cart array
    if (isset($_POST["productname"]) && isset($_POST["productamount"])) {
        $cart=($_POST["productname"] = $_POST["productamount"]);
    }
    //and send the updated cookie
    // let's use JSON again, so e.g. $json = json_encode($cart);
    setcookie("cart", json_encode($cart));

}


// check if the empty cart button has been pressed (key "emptycart" - the button's name attribute - exists in $_POST array)

if (isset($_POST["Empty cart"])) {
    $cart = [];
    setcookie("cart", "", time() - 1);
}
// if yes, empty the $cart array and set a new cookie that's set to expire in the past
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>

<body>
    <form action="shoppingcart.php" method="post">
        <p>Choose product (choosing the same product will overwrite old entry):</p>
        <p><label for="productname">Product name:</label><br>
            <select id="productname" name="productname">
                <option value="Book">Book</option>
                <option value="Computer">Computer</option>
                <option value="Phone">Phone</option>
            </select>
        </p>
        <p><label for="productamount">Amount:</label><br>
            <input type="text" id="productamount" name="productamount">
        </p>
        <p><input type="submit" name="addproduct" value="Add to cart"></p>
    </form>

    <h3>Current shopping cart</h3>
    <div id="cart">
        <?php
        // print the contents of the cart here (loop through the $cart array's key - value pairs)
        // print e.g. 1 x Book
        
        // Here's a fun little function: empty($cart) will tell you if the $cart array is empty
        // if you check for emptiness before looping, then you could print e.g. "No items." if there's nothing in the cart
        if (!empty($cart)) {
            foreach($cart as $product => $amount) {
                print("$amount x $product x <br>");
            }
        } else {
            print("No items.");
        }


        ?>

        <form action="shoppingcart.php" method="post">
            <input type="submit" name="emptycart" value="Empty cart">
        </form>
    </div>
</body>

</html>