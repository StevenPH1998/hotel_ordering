<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .price{
            position: absolute;
            width: 200px;
            padding: 5px;
            top: 0;
        }
    </style>
</head>
<body>
    <div class="items">

        <!-- display dish price -->
        <div class="price">
            <b style='background-color: white; color: black; font-size: 12px; padding: 5px; border-radius: 8px;'><?php echo "P ".$row['price']?></b>
        </div>

        <!-- display dish item name and image -->
        <a href="select-order.php?item_name=<?php echo $row['item_name'];?>&price=<?php echo $row['price'];?>">
            <img style="width: 100%; height: 100px;" src="img/items/<?php echo $row['img'];?>" alt="">
            <p><?php echo $row['item_name'];?></p>
        </a>
    </div>
</body>
</html>