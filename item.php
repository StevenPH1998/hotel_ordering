<?php
    include 'connection/conn.php';

    $dish_type = $_GET['type']; // get the dish type

    // selects all the items from the database according to its dish type
    $sql = "SELECT * FROM items WHERE type='{$dish_type}';";
    $result = mysqli_query($conn, $sql);

    // fetches the number of rows from the database based on its result
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){

            // displaying the item name, price and image.
            // generally displays all the items with the same dish type
            include 'div.php';
        }
    }
?>