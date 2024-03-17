<?php
include('connection.php');

$title = isset($_POST['title']) ?  $_POST['title'] : '';
$article = isset($_POST['article']) ? $_POST['article'] : '';

$sql = "INSERT INTO news (title, article) VALUES ('$title', '$article')";
if (!$mysqli->query($sql)) {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    $mysqli->close();
    exit;
} 
echo "New article added successfully";
$mysqli->close();


?>
