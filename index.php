<?php
$servername = "localhost";
$username = "Alfarabi";
$password = "1234";
$dbname = "course";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$speciality = $_POST['speciality'];
$qualification = $_POST['qualification'];
$message = $_POST['message'];

$sql = "INSERT INTO users (name, surname, email, phone, city, speciality, qualification, message)
VALUES ('$name', '$surname', '$email', '$phone', '$city', '$speciality', '$qualification', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных.";
} else {
    echo "Ошибка при добавлении данных: " . $conn->error;
}

$conn->close();
?>