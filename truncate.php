<?php

    // deletes the current order/s for cancellation 
    include 'connection/conn.php';

    $item_name = $_GET['item_name'];
    $sql = "TRUNCATE TABLE current_orders;";
    mysqli_query($conn, $sql);
    header('location: index.php');
?>
