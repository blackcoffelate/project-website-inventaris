<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_GET['id_users'])){
    
    $sql = "DELETE FROM users WHERE id_users = ".$_GET['id_users'];

    if (mysqli_query($conn, $sql)){
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
  
  }

?>
