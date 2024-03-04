<?php 

    // Displays the total price of your current order/s
    include 'connection/conn.php';

    $sql = 'SELECT * FROM current_orders;';
    $result = mysqli_query($conn, $sql);
    $price = 0;

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $price += $row['price'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div>
        <b style='position: absolute; bottom: 23%; left: 19%; font-size: 20px;'>TOTAL <span><?php echo 'P '.$price;?></span></b>
    </div>
</body>
</html>