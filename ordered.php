<?php
    // adds the current order/s to the database table called orders.  
    include './connection/conn.php';

    $sql = "SELECT * FROM current_orders;";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        
        //get all the rows/items from the database table "current_orders" and inserts it to the database table "orders"
        while($row=mysqli_fetch_assoc($result)){

            $item_name = $row['item_name'];
            $quantity = $row['quantity'];
            $price = $row['price'];

            $insert = "INSERT INTO orders(item_name, quantity, price) VALUES('$item_name', $quantity, $price);";
            mysqli_query($conn, $insert);
        }
    }

    // clears the current_orders database table after ordering
    $sql = 'TRUNCATE TABLE current_orders;';
    mysqli_query($conn, $sql);
?>