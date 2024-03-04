<?php 

    // deletes specific item in the database table, labeled current_orders
    include 'connection/conn.php';

    $item_name = $_GET['item_name'];
    $sql = "DELETE FROM current_orders WHERE item_name='$item_name';";
    $result = mysqli_query($conn, $sql);
    
    header('location: index.php');
?>
