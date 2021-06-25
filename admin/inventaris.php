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
                                <h2>Master Data <small>Inventori</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <a href="add_inventaris" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
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
                                                        <th>#</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>IT.023.0220.1.C032.00001</td>
                                                        <td>Converter</td>
                                                        <td>NETLINK</td>
                                                        <td>Rp. 25.000</td>
                                                        <td>HTB-3100</td>
                                                        <td>H-20190700099</td>
                                                        <td>19-Nov-2019</td>
                                                        <td>Non Seat Management</td>
                                                        <td>SISTEM INFORMASI</td>
                                                        <td>DIVRE IV Tanjungkarang</td>
                                                        <td>00024/C032/12/2019</td>
                                                        <td>12-Dec-2019</td>
                                                        <td>SAHRONI</td>
                                                        <td>ARI AKBAR DAULAY</td>
                                                        <td>ARI AKBAR DAULAY</td>
                                                        <td>DIVRE IV Tanjungkarang</td>
                                                        <td><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDIT"><i class="fa fa-pencil"></i></a>  &nbsp; <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="DELETE"><i class="fa fa-trash"></i></a></td>
                                                    </tr>
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