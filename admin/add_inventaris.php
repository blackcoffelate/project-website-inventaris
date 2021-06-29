<?php

require_once  "./function/sessions.php";

$access = $_SESSION['role'];

if(isset($_POST['nomor_inventaris'])){
    require_once "function/inventaris_add.php";
}

if (! $conn){
    die("Could not connect".mysqli_error());
}

$sql_barang = "SELECT * FROM barang WHERE id_barang";
$result_barang = mysqli_query($conn, $sql_barang);
$row_barang = mysqli_fetch_array($result_barang);

if (!$result_barang) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if(isset($row_barang['id_barang'])){
    $id_barang = $row_barang['id_barang'];
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
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Nomor Inventaris</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="nomor_inventaris">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Kategori</label>
                                            <div class="col-md-9 col-sm-9">
                                                <select class="selectpicker col-md-12 col-sm-12 form-control" data-live-search="true" name="kategori" id="kategori">
                                                    <option disabled selected>-- kategori --</option>
                                                    <?php
                                                        $sql = "SELECT * FROM barang ORDER BY id_barang ASC";
                                                        $result = mysqli_query($conn, $sql);
                                                    
                                                        if (mysqli_num_rows($result)>0){
                                                            while ($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <option data-id="<?php echo $row['id_barang']; ?>" value="<?php echo $row['id_barang']; ?>"><?php echo $row['kategori']; ?></option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Merk</label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" class="form-control" placeholder="Type here..." id="merk" name="merk" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Harga</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="harga" id="harga" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Series</label>
                                            <div class="col-md-9 col-sm-9">
                                                <input type="text" class="form-control" placeholder="Type here..." name="series" id="series" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Serial Number</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="serial_number" id="serial_number" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Tanggal Pengadaan</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="date" class="form-control" placeholder="Type here..." name="tanggal_pengadaan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Tipe Pengadaan</label>
                                            <div class="col-md-9 col-sm-9">
                                                <select class="selectpicker col-md-12 col-sm-12 form-control" data-live-search="true" name="tipe_pengadaan">
                                                    <option data-tokens="ketchup mustard" disabled selected>-- tipe pengadaan --</option>
                                                    <option value="Non Seat Management">Non Seat Management</option>
                                                    <option value="Seat Management SP 1">Seat Management SP 1</option>
                                                    <option value="Seat Management SP 2">Seat Management SP 2</option>
                                                    <option value="Seat Management SP 3">Seat Management SP 3</option>
                                                    <option value="Seat Management SP 4">Seat Management SP 4</option>
                                                    <option value="Seat Management SP 5">Seat Management SP 5</option>
                                                    <option value="Seat Management SP 6">Seat Management SP 6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Unit Pengadaan</label>
                                            <div class="col-md-9 col-sm-9">
                                                <select class="selectpicker col-md-12 col-sm-12 form-control" data-live-search="true" name="unit_pengadaan">
                                                    <option data-tokens="ketchup mustard" disabled selected>-- unit pengadaan --</option>
                                                    <?php
                                                        $sql = "SELECT * FROM unit_pengadaan ORDER BY id_unit_pengadaan ASC";
                                                        $result = mysqli_query($conn, $sql);
                                                    
                                                        if (mysqli_num_rows($result)>0){
                                                            while ($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <option value="<?php echo $row['nama_unit_pengadaan'] ?>"><?php echo $row['nama_unit_pengadaan'] ?></option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Area Pengadaan</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="area_pengadaan">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Nomor Dokumen</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="nomor_dokumen">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Tanggal Serah Terima</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="date" class="form-control" placeholder="Type here..." name="tanggal_serah_terima">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Penyerah</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="penyerah">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Penerima</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="penerima">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Pengguna</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="pengguna">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Area Penggunaan</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here..." name="area_penggunaan">
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

    <script type="text/javascript" language="javascript">
        $('#kategori').on('change', function(e){
            var id_barang = $(this).val();
            $.ajax({
                url : 'function/get_data_barang.php',
                data : 'id_barang=' + id_barang,
            }).success(function(data){
                var json = data,
                obj = JSON.parse(json);
                $('#merk').val(obj.merk);
                $('#harga').val(obj.harga);
                $('#series').val(obj.series);
                $('#serial_number').val(obj.serial_number);
            });
        });
    </script>

</body>

</html>