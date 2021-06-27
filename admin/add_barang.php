<?php

require_once  "./function/sessions.php";

$access = $_SESSION['role'];

if(isset($_POST['harga'])){
    require_once "function/barang_add.php";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "view/style.php" ?>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php require_once "view/sidebar.php" ?>

            <?php require_once "view/topbar.php" ?>

            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Tambah Data</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-8 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Pengisian Data <small>masukan data dengan benar.</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <?php 
                                        if (isset($check_data)){
                                            echo $check_data;
                                        }
                                    ?>
                                    <form class="form-horizontal form-label-left" method="POST">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Kategori</label>
                                            <div class="col-md-9 col-sm-9">
                                                <select class="selectpicker col-md-12 col-sm-12 form-control" data-live-search="true" name="kategori">
                                                    <option data-tokens="ketchup mustard" disabled selected>-- kategori --</option>
                                                    <?php
                                                        $sql = "SELECT * FROM kategori ORDER BY id_kategori ASC";
                                                        $result = mysqli_query($conn, $sql);
                                                    
                                                        if (mysqli_num_rows($result)>0){
                                                            while ($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <option data-tokens="<?php echo $row['nama_kategori']; ?>" value="<?php echo $row['nama_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Merk</label>
                                            <div class="col-md-9 col-sm-9">
                                                <select class="selectpicker col-md-12 col-sm-12 form-control" data-live-search="true" name="merk">
                                                    <option data-tokens="ketchup mustard" disabled selected>-- merk --</option>
                                                    <?php
                                                        $sql = "SELECT * FROM merk ORDER BY id_merk ASC";
                                                        $result = mysqli_query($conn, $sql);
                                                    
                                                        if (mysqli_num_rows($result)>0){
                                                            while ($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <option data-tokens="<?php echo $row['nama_merk']; ?>" value="<?php echo $row['nama_merk']; ?>"><?php echo $row['nama_merk']; ?></option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Harga</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="harga">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Series</label>
                                            <div class="col-md-9 col-sm-9">
                                                <select class="selectpicker col-md-12 col-sm-12 form-control" data-live-search="true" name="series">
                                                    <option data-tokens="ketchup mustard" disabled selected>-- series --</option>
                                                    <?php
                                                        $sql = "SELECT * FROM series ORDER BY id_series ASC";
                                                        $result = mysqli_query($conn, $sql);
                                                    
                                                        if (mysqli_num_rows($result)>0){
                                                            while ($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <option data-tokens="<?php echo $row['nama_series']; ?>" value="<?php echo $row['nama_series']; ?>"><?php echo $row['nama_series']; ?></option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Serial Number</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="serial_number">
                                            </div>
                                        </div>
										<div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Stok</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="stok">
                                                <input type="text" class="form-control" placeholder="Type here..." name="posted" value="<?php echo $_SESSION['nama_lengkap']?>" hidden>
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-warning"></i> Informasi <small>pengisian</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <p>- Sebelum melakukan pengisian data, diharapkan melengkapi data komponen untuk
                                        kelengkapan data.</p>
                                    <p>- Seluruh data optional dapat digunakan dalam waktu yang panjang, dan dapat di
                                        hapus atau di ubah melalui menu komponen.</p>
                                    <p>- Pastikan data terisi dengan benar untuk menghindari kesalahan data.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
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

    <script>
    $(document).ready(function() {
        $('#datatable-responsive').DataTable();
    });
    $(document).ready(function() {
        $('#datatable-responsive1').DataTable();
    });
    $(document).ready(function() {
        $('#datatable-responsive2').DataTable();
    });
    $(document).ready(function() {
        $('#datatable-responsive3').DataTable();
    });
    $(document).ready(function() {
        $('#datatable-responsive4').DataTable();
    });
    </script>
    <script src="../build/js/custom.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

</body>

</html>