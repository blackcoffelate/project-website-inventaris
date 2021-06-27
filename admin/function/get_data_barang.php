<?php

require_once "connection.php";

$id_barang = $_GET['id_barang'];

$sql = "SELECT * FROM barang WHERE id_barang = '$id_barang' ";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($result);

$show = array(
    'merk' => $data['merk'],
    'harga' => $data['harga'],
    'series' => $data['series'],
    'serial_number' => $data['serial_number']
);

echo json_encode($data);

?>