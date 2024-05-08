<!DOCTYPE html>
<html lang="ru"></html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Pinegrow Web Editor - Shop Bootstrap v5 Template">
        <meta name="author" content="">
        <title>АннаShop</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/blocks.css">
        <link href="./css/style.css" rel="stylesheet">
</head>
    <body>
        <?php
        include "header.php"
        ?>
        <?php
            /*session_start(); // Начинаем сессию, чтобы иметь доступ к корзине

            // Подключение к базе данных
            $servername = "127.0.0.1";
            $username = "root"; // Замените на ваше имя пользователя для доступа к базе данных
            $password = ""; // Замените на ваш пароль для доступа к базе данных
            $dbname = "Visitors"; // Замените на имя вашей базы данных

            // Создание подключения
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Проверка соединения
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Получение информации о товаре из POST-запроса
            $product_id = $_POST["product_id"];
            $product_name = $_POST["product_name"];
            $product_price = $_POST["product_price"];
            $product_description = $_POST["product_description"];

            // Подготовка и выполнение SQL-запроса для добавления товара в корзину
            $sql = "INSERT INTO cart (product_id, product_name, product_price, product_description) VALUES ('$product_id', '$product_name', '$product_price', '$product_description')";

            if ($conn->query($sql) === TRUE) {
                echo "Товар успешно добавлен в корзину";
            } else {
            echo "Ошибка: " . $sql . "<br>" . $conn->error;
            }

            // Закрытие соединения
            $conn->close();*/
        ?>

        <div id="cart" class="cart">
            <!-- Ваше содержимое корзины будет здесь -->
        </div>

        <style>
            .cart {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .cart-item img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .remove-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        </style>

        <script src="script/trash.js"></script>
    </body>
</html>
