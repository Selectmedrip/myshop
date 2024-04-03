<?php
// Подключение к базе данных
$servername = "127.0.0.1"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = "root"; // Пароль базы данных
$dbname = "mydb"; // Имя вашей базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$first_name = $_POST['FirstName'];
$last_name = $_POST['LastName'];
$email = $_POST['email'];
$password = $_POST['password'];

// Вставка данных в таблицу
$sql = "INSERT INTO users (FirstName, LastName, email, password)
VALUES ('$first_name', '$last_name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Новая запись успешно добавлена";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения
$conn->close();
?>
