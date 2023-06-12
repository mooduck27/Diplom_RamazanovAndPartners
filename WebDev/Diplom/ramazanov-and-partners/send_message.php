<?php
// Replace with your own bot token and chat ID
$bot_token = '5889193480:AAGe3F9GO6lNz1Jrhk4U4WR7wBSYAW8TuoY';
$chat_id = '-848630108';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $theme = $_POST['theme'];
    $message = $_POST['message'];

    $text = "ФИО: $name\nНомер Телефона: $phone\nТема вопроса: $theme\nСообщение: $message";

    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);
    file_get_contents($url);
}