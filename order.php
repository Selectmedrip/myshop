<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Макс Дев</title>
    <link rel="stylesheet" href="log_reg/php/autorithation/css/success.css">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="img">
                </div>
                    <div class="textBox">
                        <div class="textContent">
                        <p class="h1">Макс  Дев</p>
                            <span class="span">секунду назад</span>
                        </div>
                        <p class="p">Спасибо за заказ!<br>Вы можете узнать статус вашего заказа в нашем Телеграм боте по кнопке ниже.</p>
                    <div>
                </div>
            </div>
        </div>
    </div>
    <div class="container1">
        <button class="button" onclick="redirectToLoginPage()">Перейти к деталям заказа</button>
        <script>
        function redirectToLoginPage() {
            // Перенаправление на другой ресурс, где отслеживается заказ
            window.location.href = "https://t.me/legoorder_bot";
        }
        </script>
    </div>

</body>
</html>