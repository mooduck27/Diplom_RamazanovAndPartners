<?php
// Replace with your own bot token and chat ID
$bot_token = '5889193480:AAGe3F9GO6lNz1Jrhk4U4WR7wBSYAW8TuoY';
$chat_id = '-905833915';

$count = file_get_contents("count.txt"); // Read the current count value from the text file
$count = trim($count); // Remove any new line characters
$count = $count + 1; // Increment the count value by 1

$fl = fopen("count.txt", "w+"); // Open the text file for writing
fwrite($fl, $count); // Write the updated count value to the text file
fclose($fl); // Close the file

echo "Page views: " . $count; // Display the updated count value

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $text = "Запись №: $count\nФИО: $name\nНомер Телефона: $phone\nУслуга: $service\nСообщение: $message";

    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);
    file_get_contents($url);
}