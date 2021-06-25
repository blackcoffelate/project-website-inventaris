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

                    <div class="col-md-6 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Input Data <small>Series</small></h2>
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
                                    <div class="col-md-12 col-sm-12 ">
                                        <br />
                                        <form id="demo-form2" data-parsley-validate
                                            class="form-horizontal form-label-left">
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                    for="first-name">Nama Series <span class="required">*</span>
                                                </label>
                                                <div class="col-md-8 col-sm-8 ">
                                                    <input type="text" id="first-name" required="required"
                                                        class="form-control ">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="item form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="display: block;">

                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Master Data <small>Series</small></h2>
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
                                                Kumpulan data series barang.
                                            </p>
                                            <table id="datatable-responsive" class="table dt-responsive nowrap hover"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Series</th>
                                                        <th>Tanggal Input</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Converter</td>
                                                        <td>25/01/2021</td>
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

</body>

</html>