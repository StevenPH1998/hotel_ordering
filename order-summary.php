<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        table{
            text-align: left;
        }
        td, th{
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <tr>
        <!-- displays current orders item name, quantity, and price -->
        <td><?php echo $row['item_name'];?></td>
        <td><?php echo "x".$row['quantity'];?></td>
        <td><?php echo $row['price'];?></td>
        <td>
            <!-- cancel button 'X' to delete specific item in your current order/s -->
            <?php
                $item_name = $row['item_name']; 
                echo "<a style='text-decoration: none; color: black; font-weight: bold;' href='delete-order.php?item_name={$item_name}'>X</a>";
            ?>
        </td>
    </tr>
</body>
</html>