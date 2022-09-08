<?php
include "conn.php";

$masuk = $_GET['masuk'];
$keluar = $_GET['keluar'];
$total = $_GET['total'];

//store data color to database
$sqlInsert = "INSERT INTO `data` (data_masuk, data_keluar, jumlah_populasi) VALUES ($masuk, $keluar, $total)";

if ($conn->query($sqlInsert) === TRUE) {
    echo "data stored successfully";
  } else {
    echo "Error store data: " . $conn->error;
}
?>