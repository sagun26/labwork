<?php
$connection = new mysqli("localhost", "username", "password", "database");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = 5; // Number of articles to load at a time

$sql = "SELECT title, description, image FROM news LIMIT $limit OFFSET $offset";
$result = $connection->query($sql);

$newsItems = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newsItems[] = $row;
    }
}

echo json_encode($newsItems);

$connection->close();
?>
