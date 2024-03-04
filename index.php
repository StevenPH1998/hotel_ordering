<?php

    // if users clicks the order button and the order/s list is empty then it prompts the 'No item/s to purchase error 'message
    if(isset($_GET['no_order'])){
        echo "<script>alert('No item/s to purchase.')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left_col">
            <h1>Order Summary</h1>
            <table>
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </table>

            <!-- include to get total and view current orders -->
            <?php include 'order.php';?>
            <?php include 'get-total.php';?>
        </div>

        <!-- view dish types and choose, which redirects to view-items.php -->
        <div class="right_col">
            <div class="items">
                <a href="./view-items.php?type=Main">
                    <img style="width: 100%; height: 100px;" src="img/main.jpg" alt="">
                    <p>Main Dish</p>
                </a>
            </div>
            <div class="items">
                <a href="./view-items.php?type=Dessert">
                    <img style="width: 100%; height: 100px;" src="img/dessert.jpg" alt="">
                    <p>Dessert</p>
                </a>
            </div>
            <div class="items">
                <a href="./view-items.php?type=Drinks">
                    <img style="width: 100%; height: 100px;" src="img/drinks.jpg" alt="">
                    <p>Drinks</p>
                </a>
            </div>
            <div class="items">
                <a href="./view-items.php?type=Sides">
                    <img style="width: 100%; height: 100px;" src="img/sides.jpg" alt="">
                    <p>Sides</p>
                </a>
            </div>

            <!-- buttons for cancel and purchase which prompts a message wether to confirm users choice of action -->
            <div class="buttons">

                <!-- cancels the order -->
                <form action="truncate.php" method="post" style="display: inline-block; width: 252px;">
                    <input style='background-color: #ff4122; color: white; border: 1px solid grey; padding: 10px; width: 100%;' type="submit" onclick="return confirm('Cancel Order?')" value='Cancel order' name='cancel'>
                </form>

                <!-- Countinue Purchasing the order -->
                <form action="to_order.php" method="post" style="display: inline-block; width: 252px;">
                    <input style='background-color: #26d710; color: white; border: 1px solid grey; padding: 10px; width: 100%;' type="submit" onclick="return confirm('Continue Purchase?')" value='Confirm order' name='submit'>
                </form>
            </div>
        </div>
    </div>
</body>
</html>