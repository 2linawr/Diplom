<?php
$servername = "localhost";
$database = "diplom_students";
$username = "mysql";
$password = "mysql";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $room = $_POST['room'];
    $quest = $_POST['quest'];
    $date_in = $_POST['date_in'];
    $date_out = $_POST['date_out'];
    $query = "INSERT INTO `rooms` (`id`, `room`, `Guests`, `Check_In`, `Check Out`) VALUES (NULL, '$room', '$quest', '$date_in', '$date_out')";
    $res = mysqli_query($conn,$query);
mysqli_close($conn);
?>