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
                <div class="row col-12" style="display: inline-block;">
                    <div class="tile_count">
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-cubes"></i> Total Data Barang</span>
                            <div class="count">
                            <?php
                                $sql = "SELECT COUNT(*) FROM barang";
                                $result = mysqli_query($conn, $sql);
                              
                                if (mysqli_num_rows($result)>0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo $row['COUNT(*)'];
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-archive"></i> Total Data Inventaris</span>
                            <div class="count">
                            <?php
                                $sql = "SELECT COUNT(*) FROM inventaris";
                                $result = mysqli_query($conn, $sql);
                              
                                if (mysqli_num_rows($result)>0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo $row['COUNT(*)'];
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-gear"></i> Total Kategori</span>
                            <div class="count">
                            <?php
                                $sql = "SELECT COUNT(*) FROM kategori";
                                $result = mysqli_query($conn, $sql);
                              
                                if (mysqli_num_rows($result)>0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo $row['COUNT(*)'];
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-gear"></i> Total Merk</span>
                            <div class="count">
                            <?php
                                $sql = "SELECT COUNT(*) FROM merk";
                                $result = mysqli_query($conn, $sql);
                              
                                if (mysqli_num_rows($result)>0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo $row['COUNT(*)'];
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-gear"></i> Total Series</span>
                            <div class="count">
                            <?php
                                $sql = "SELECT COUNT(*) FROM series";
                                $result = mysqli_query($conn, $sql);
                              
                                if (mysqli_num_rows($result)>0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo $row['COUNT(*)'];
                                    }
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Master Data <small>Inventori</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
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
                                                        <th>#</th>
                                                        <th>Nomor Inventori</th>
                                                        <th>Kategori</th>
                                                        <th>Merk</th>
                                                        <th>Harga</th>
                                                        <th>Series</th>
                                                        <th>Serial Number</th>
                                                        <th>Tanggal Pengadaan</th>
                                                        <th>Tipe Pengadaan</th>
                                                        <th>Unit Pengadaan</th>
                                                        <th>Area Pengadaan</th>
                                                        <th>Nomor Dokumen</th>
                                                        <th>Tanggal Serah Terima</th>
                                                        <th>Penyerah</th>
                                                        <th>Penerima</th>
                                                        <th>Pengguna</th>
                                                        <th>Area Penggunaan</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                        $sql = "SELECT * FROM inventaris ORDER BY id_inventaris ASC";
                                                        $result = mysqli_query($conn, $sql);
                                            
                                                        $count = 1;
                                                    
                                                        if (mysqli_num_rows($result)>0){
                                                            while ($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $row['nomor_inventaris']; ?></td>
                                                        <td><?php echo $row['kategori']; ?></td>
                                                        <td><?php echo $row['merk']; ?></td>
                                                        <td>Rp. <?php echo number_format($row['harga']); ?></td>
                                                        <td><?php echo $row['series']; ?></td>
                                                        <td><?php echo $row['serial_number']; ?></td>
                                                        <td><?php echo date('D, d F Y', strtotime($row['tanggal_pengadaan'])); ?></td>
                                                        <td><?php echo $row['tipe_pengadaan']; ?></td>
                                                        <td><?php echo $row['unit_pengadaan']; ?></td>
                                                        <td><?php echo $row['area_pengadaan']; ?></td>
                                                        <td><?php echo $row['nomor_dokumen']; ?></td>
                                                        <td><?php echo date('D, d F Y', strtotime($row['tanggal_serah_terima'])); ?></td>
                                                        <td><?php echo $row['penyerah']; ?></td>
                                                        <td><?php echo $row['penerima']; ?></td>
                                                        <td><?php echo $row['pengguna']; ?></td>
                                                        <td><?php echo $row['area_penggunaan']; ?></td>
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