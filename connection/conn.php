<?php 

    // connection to the database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'ordermachine';

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(mysqli_connect_error()){
        echo "Sorry there's an error";
    }
?>