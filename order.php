<?php 
    include 'connection/conn.php';

    $sql = "SELECT * FROM current_orders;";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo '<div class="orders">
        <table>';
        while($row = mysqli_fetch_assoc($result)){

            // gets and displays all the items names, quantities and prices as rows
            // Simply for the display of your current order/s
            include 'order-summary.php';
        }
        echo '</table>
        </div>';
    }else{

        // if the current order is empty then the 'No order/s placed yet' message is displayed.
        echo "<div style='width: 58.5%; margin: 50% auto;'>No order/s placed yet.</div>";
    }
?>