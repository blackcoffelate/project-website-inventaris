<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_POST['nama_lengkap'])){
    
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $jabatan = mysqli_real_escape_string($conn, $_POST['jabatan']);
    $nomor_telp = mysqli_real_escape_string($conn, $_POST['nomor_telp']);
    $alamat_lengkap = mysqli_real_escape_string($conn, $_POST['alamat_lengkap']);
    $role = $jabatan;

    $check_user = "SELECT username FROM users WHERE username = '$username'";
    $result_check = mysqli_query($conn, $check_user);

    if (mysqli_num_rows($result_check)>=1){
        $check_data = "<div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
        <strong>Oppss maaf !</strong> username sudah digunakan.
        </div>";
    }else{
        $sql = "INSERT INTO users (nama_lengkap, username, password, jabatan, nomor_telp, alamat, role, create_at, update_at)
        VALUES ('$nama_lengkap', '$username', '".md5($password)."', '$jabatan', '$nomor_telp', '$alamat_lengkap', '$role', now(), now())";

        if (mysqli_query($conn, $sql)){            
            $check_data = "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
            <strong>Yeayy selamat !</strong> data berhasil di masukan.
            </div>
            <script>setTimeout(function(){ location.href='./anggota'; }, 1000);</script>
            ";            
        }else{
            echo "Error" .$sql.$conn->error;
        }
    }

    // $conn->close();
}

?>
