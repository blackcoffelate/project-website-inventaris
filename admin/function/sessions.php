<?php

require_once "connection.php";
session_start();

if(!isset($_SESSION['username']) && !isset($_SESSION['role'])){
    header('location: ./../');
}

$id = $_SESSION['id_users'];

$sql = "SELECT * FROM users WHERE id_users = ".$id;
  
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
