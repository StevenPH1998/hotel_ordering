<?php 
    include 'connection/conn.php';
    
    $item_name = $_GET['item_name'];
    $pricing = $_GET['price'];
    
    $sql = "SELECT * FROM current_orders WHERE item_name='$item_name';";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        
        //gets the quantity of the dish if order exists then updates database table "current_orders" for the new quantity and price
        while($row = mysqli_fetch_assoc($result)){
            $quant = $row['quantity'];
        }
        $total_price = $pricing * $quant + $pricing;
        $add_quant = $quant + 1;
        $update = "UPDATE current_orders SET quantity=$add_quant, price=$total_price WHERE item_name='$item_name';";
        mysqli_query($conn, $update);
    }else{

        // inserts new dish to database if it does not exist in the database table "current orders"
        $quantity = 1;
        $price = $_GET['price'];
        $stmt = $conn->prepare("INSERT INTO current_orders VALUES(?,?,?);");
        $stmt->bind_param("sii", $item_name, $quantity, $price);
        
        $stmt->execute();
        $stmt->close();
    }
    $conn->close();
    header('location: index.php?');

?>