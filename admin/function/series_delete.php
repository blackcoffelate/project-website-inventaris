<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_GET['id_series'])){
    
    $sql = "DELETE FROM series WHERE id_series = ".$_GET['id_series'];

    if (mysqli_query($conn, $sql)){
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
  
  }

?>
