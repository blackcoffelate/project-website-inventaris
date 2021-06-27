<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_POST['harga'])){
    
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $merk = mysqli_real_escape_string($conn, $_POST['merk']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $series = mysqli_real_escape_string($conn, $_POST['series']);
    $serial_number = mysqli_real_escape_string($conn, $_POST['serial_number']);
    $stok = mysqli_real_escape_string($conn, $_POST['stok']);
    $posted = mysqli_real_escape_string($conn, $_POST['posted']);
    
    $sql = "INSERT INTO barang (kategori, merk, harga, series, serial_number, stok, posted, create_at, update_at)
    VALUES ('$kategori', '$merk', '$harga', '$series', '$serial_number', '$stok', '$posted', now(), now())";

    if (mysqli_query($conn, $sql)){
        $check_data = "<div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
        <strong>Yeayy selamat !</strong> data berhasil di masukan.
        </div>
        <script>setTimeout(function(){ location.href='./barang'; }, 1000);</script>
        ";            
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
}

?>
