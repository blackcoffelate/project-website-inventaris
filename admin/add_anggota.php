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
                                    <form class="form-horizontal form-label-left">
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Nama Lengkap</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here...">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Username</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here...">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Password</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="password" class="form-control" placeholder="Type here...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Jabatan</label>
                                            <div class="col-md-9 col-sm-9">
                                                <select class="selectpicker col-md-12 col-sm-12 form-control"
                                                    data-live-search="true">
                                                    <option data-tokens="ketchup mustard" disabled selected>-- kategori
                                                        --</option>
                                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                                    <option data-tokens="frosting">Sugar, Spice and all things nice
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Nomor Telepon</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here...">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Alamat Lengkap</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" placeholder="Type here...">
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