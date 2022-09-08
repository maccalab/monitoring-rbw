<?php

include 'conn.php';

$sql = "SELECT * FROM data ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo json_encode($row);
?>