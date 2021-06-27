<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_GET['id_barang'])){
    
    $sql = "DELETE FROM barang WHERE id_barang = ".$_GET['id_barang'];

    if (mysqli_query($conn, $sql)){
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
  
  }

?>
