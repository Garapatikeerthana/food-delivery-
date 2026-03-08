<html>
<head>
    <title>cart</title>
</head>
<body>
<div class="header">
        <a href="index.html" class="logo">
                    <img src="./images/f2.jpg" height="80px" width="auto"></a>
            <p class="logo">CART</p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">₹ 0.00</h2>
                </div>
            <form>
            </form>
<?php
$servername="localhost";
$username="root";
$password="";
$mydb="craving";

//connect with database servername,username,password
$conn=mysqli_connect($servername,$username,$password,$mydb);
//if the above host with username and pass is not there
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}

// Create a form to input billing details
echo '<form action="store_billing.php" method="post">'; 
echo '<input type="text" id="phone" placeholder="Phone"><br><br><br>'; 
echo '<input type="text" id="address" placeholder="Address"><br><br><br>'; 
echo '<button onclick="checkout()" style="font-size: 30px;color:white ;background-color:rgb(247, 133, 33); border: none;"/>Checkout</button>'; 
echo '</form>';
?>
 </div>
        </div>
        <script src="cart.js"></script>
    </body>


</body>
</html>