<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_POST['nomor_inventaris'])){
    
    $nomor_inventaris = mysqli_real_escape_string($conn, $_POST['nomor_inventaris']);
    $id_barang = mysqli_real_escape_string($conn, $_POST['kategori']);

    $query_barang = "SELECT * FROM barang WHERE id_barang = '".$id_barang."'";
    $result_barang = mysqli_query($conn, $query_barang);
    $row_barang = mysqli_fetch_array($result_barang);

    $kategori = $row_barang['kategori'];
    $merk = $row_barang['merk'];
    $harga = $row_barang['harga'];
    $series = $row_barang['series'];
    $serial_number = $row_barang['serial_number'];
    $stok = $row_barang['stok'];
    $final_stok = $stok - 1;

    $tanggal_pengadaan = mysqli_real_escape_string($conn, $_POST['tanggal_pengadaan']);
    $tipe_pengadaan = mysqli_real_escape_string($conn, $_POST['tipe_pengadaan']);
    $unit_pengadaan = mysqli_real_escape_string($conn, $_POST['unit_pengadaan']);
    $area_pengadaan = mysqli_real_escape_string($conn, $_POST['area_pengadaan']);
    $nomor_dokumen = mysqli_real_escape_string($conn, $_POST['nomor_dokumen']);
    $tanggal_serah_terima = mysqli_real_escape_string($conn, $_POST['tanggal_serah_terima']);
    $penyerah = mysqli_real_escape_string($conn, $_POST['penyerah']);
    $penerima = mysqli_real_escape_string($conn, $_POST['penerima']);
    $pengguna = mysqli_real_escape_string($conn, $_POST['pengguna']);
    $area_penggunaan = mysqli_real_escape_string($conn, $_POST['area_penggunaan']);

    $sql_update = "UPDATE barang SET stok = '$final_stok' WHERE id_barang = '$id_barang'";
    
    $sql = "INSERT INTO inventaris (nomor_inventaris, kategori, merk, harga, series, serial_number, tanggal_pengadaan, tipe_pengadaan, unit_pengadaan, area_pengadaan, nomor_dokumen, 
    tanggal_serah_terima, penyerah, penerima, pengguna, area_penggunaan, create_at, update_at)
    VALUES ('$nomor_inventaris', '$kategori', '$merk', '$harga', '$series', '$serial_number', '$tanggal_pengadaan', '$tipe_pengadaan', '$unit_pengadaan', '$area_pengadaan',
    '$nomor_dokumen', '$tanggal_serah_terima', '$penyerah', '$penerima', '$pengguna', '$area_pengadaan', now(), now())";

    if(mysqli_query($conn, $sql)){
        if (mysqli_query($conn, $sql_update)){
            $check_data = "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
            <strong>Yeayy selamat !</strong> data berhasil di masukan.
            </div>
            <script>setTimeout(function(){ location.href='./inventaris'; }, 1000);</script>
            ";            
        }else{
            echo "Error" .$sql.$conn->error;
        }
    }

    // $conn->close();
}

?>