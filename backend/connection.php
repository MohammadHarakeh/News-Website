<?php
$host = "localhost";
$db_user = "root";
$db_pass = null;
$db_name = "news-website-db";

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error) {
    die( $mysqli->connect_error);
}
?>