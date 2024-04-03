<?php
$host = '127.0.0.1'; // Замени на свой хост
$username = 'root'; // Замени на своего пользователя
$password = 'root'; // Замени на свой пароль
$dbname = 'mydb'; // Замени на имя своей базы данных

// Создание подключения
$conn = new mysqli($host, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$email = $_POST['email'];
$password = $_POST['password'];

// SQL-запрос для проверки пользователя
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

// Проверка результата запроса
if ($result->num_rows > 0) {
    // Пользователь найден, перенаправление на другую страницу
    // Передача имени пользователя в URL
    header("Location: index.html?username=" . $username);
    exit;
} else {
    // Пользователь не найден, вывод сообщения об ошибке
    echo "Неверный email или пароль";
}

// Закрытие соединения
$conn->close();
?>
