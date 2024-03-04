<?php 
    include './connection/conn.php';

    $sql = "SELECT * FROM current_orders;";
    $result = mysqli_query($conn, $sql);
    
    // redirects to success_order.php if ordered, otherwise to the index.php
    if(mysqli_num_rows($result) > 0){
        header('location: success_order.php');
    }else{
        header('location: index.php?no_order=true');
    }
?>