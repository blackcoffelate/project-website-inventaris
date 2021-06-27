<?php

require_once  "./function/sessions.php";

$access = $_SESSION['role'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "view/style.php" ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php require_once "view/sidebar.php" ?>

            <?php require_once "view/topbar.php" ?>

            <div class="right_col" role="main">
                <div class="row" style="display: block;">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Master Data <small>Angota</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <a href="add_anggota" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                                Cari data yang anda inginkan dengan memasukan sample data di kolom
                                                pencarian.
                                            </p>
                                            <table id="datatable-responsive" class="table dt-responsive nowrap hover"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Username</th>
                                                        <th>Password</th>
                                                        <th>Jabatan</th>
                                                        <th>Nomor Telepon</th>
                                                        <th>Alamat</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                        $sql = "SELECT * FROM users ORDER BY id_users ASC";
                                                        $result = mysqli_query($conn, $sql);
                                            
                                                        $count = 1;
                                                    
                                                        if (mysqli_num_rows($result)>0){
                                                            while ($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $row['nama_lengkap']; ?></td>
                                                        <td><?php echo $row['username']; ?></td>
                                                        <td><?php echo $row['password']; ?></td>
                                                        <td>
                                                            <?php  
                                                                $jabatan = $row['jabatan'];
                                                                if($jabatan == "0"){
                                                                    echo "<i class='fa fa-shield'></i> Administrator";
                                                                }elseif ($jabatan == "1"){
                                                                    echo "<i class='fa fa-bullseye'></i> Pimpinan";
                                                                }else{
                                                                    echo "<i class='fa fa-dot-circle-o'></i> Anggota";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['nomor_telp']; ?></td>
                                                        <td><?php echo $row['alamat']; ?></td>
                                                        <td><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDIT"><i class="fa fa-pencil"></i></a>  &nbsp; <a href="delete" onclick="window.location = 'function/anggota_delete.php?id_users=<?php echo $row['id_users']; ?>'; return false;" data-toggle="tooltip" data-placement="top" title="" data-original-title="DELETE"><i class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    <?php
                                                        $count = $count + 1;
                                                        }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>

            <footer>
                <div class="pull-right">
                    Copyright &copy; <script>
                    document.write(new Date().getFullYear())
                    </script> Inventori App
                </div>
                <div class="clearfix"></div>
            </footer>

        </div>
    </div>

    <script src="../build/js/custom.min.js"></script>

</body>

</html>