<!-- display when order is successful -->

<?php 

    // include to add all your orders to the database
    include 'ordered.php';

    // when enter key is pressed it redirects to the index.php
    if(isset($_POST['enter'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-flow: wrap row;
            align-content: center;
            height: 700px;
        }
        div.word{
            width: 250px;
            text-align: center;
            margin: auto;
            font-size: 20px;
        }
        .material-symbols-outlined.rotate{
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24;
            font-size: 70px;
            color: #26d710;
        }
        .material-symbols-outlined.done{
            font-variation-settings:
            'FILL' 0,
            'wght' 900,
            'GRAD' 0,
            'opsz' 24;
            font-size: 39px;
            color: #26d710;
            position: absolute;
            top: 306px;
            left: 748px;;
            background-color: white;
            border-radius: 50px;
        }
        p{
            color: black;
        }
        form{
            position: absolute;
        }
        input{
            border: none;
            color: red;
        }
        input:focus{
            outline: none;
            color: white
        }
    </style>
</head>
<body>
    <form action="" method='post'>
        <input type="text" name="enter" autofocus>
    </form>
    <div class='word'>
        <span id="icon" class="material-symbols-outlined rotate">verified</span>
        <span class="material-symbols-outlined done">done</span>
        <p>Thank you for ordering.</p>
    </div>
    <script>
        var id =null;
        let deg = 0;
        let icon =document.getElementById('icon');
        id = setInterval(rotate, 55)
        function rotate(){
            icon.style.transform = "rotate(" + deg + "deg)";
            deg += 10;
        }
    </script>
</body>
</html>