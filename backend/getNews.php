<?php
include('connection.php');
header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type");

$sql = "SELECT * FROM news ORDER BY id DESC";
$result = $mysqli->query($sql);

if (!$result){
    echo "Error: " .$sql . "<br>" .$mysqli->error;
    $mysqli->close();
    exit;
}

$newsArticles = array();

while($row = $result->fetch_assoc()){
    $newsArticles[] = $row;
}

header('Content-Type: application/json');
echo json_encode($newsArticles);

$mysqli->close();