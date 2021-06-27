<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_GET['id_unit_pengadaan'])){
    
    $sql = "DELETE FROM unit_pengadaan WHERE id_unit_pengadaan = ".$_GET['id_unit_pengadaan'];

    if (mysqli_query($conn, $sql)){
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
  
  }

?>
