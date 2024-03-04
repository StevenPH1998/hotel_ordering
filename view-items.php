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
            <?php include 'order.php';?>
            <?php include 'get-total.php';?>  
        </div>
        
        <!-- includes the item.php to view items with its dish type (e.i. Main, Dessert, Drinks, and Sides) -->
        <div class="right_col">
            <?php include 'item.php';?>
            <div class="buttons">
                <a href="index.php"><button style='width: 100px; background-color: #26d710; width: 100%; border: 1px grey solid; color: white;'>Back</button></a>
            </div>
        </div>
    </div>
</body>
</html>