<?php
require_once __DIR__ . '/models/products.php';
require_once __DIR__ . '/models/category.php';
require_once __DIR__ . '/models/food.php';

$dog_category = new category("dog", "icon placeholder");
$cat_category = new category("cat", "icon placeholder");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body class="text-white">

    <div class="wrapper container text-center">

        <?php
        require_once __DIR__ . '/structure/header.php';
        require_once __DIR__ . '/structure/main.php'
        ?>


    </div>
</body>

</html>