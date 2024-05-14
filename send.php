<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log_reg/php/autorithation/css/success.css">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="img">
                </div>
                    <div class="textBox">
                        <div class="textContent">
                        <p class="h1">Анна Шоп</p>
                            <span class="span">секунду назад</span>
                        </div>
                        <p class="p">Спасибо что подписались!</p>
                    <div>
                </div>
            </div>
        </div>
    </div>
    <div class="container1">
        <button class="button" onclick="redirectToLoginPage()">Перейти к главной</button>
        <script>
        function redirectToLoginPage() {
            // Перенаправление на другой HTML файл (например, login.html)
            window.location.href = "index.php";
        }
        </script>
    </div>

</body>
</html>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mail = $_POST["mail"];
        $to = "$mail";
        $subject = "Новостная подписка";
        $message = "$mail спасибо за подписку на новости и акции, мы рады что вы выбрали именно нас";
        $headers = "From: webmaster@example.com";

        mail($to, $subject, $message, $headers);
    }
?>