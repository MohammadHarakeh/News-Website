<?php
include('connection.php');


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