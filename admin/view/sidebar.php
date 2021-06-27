<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="../admin" class="site_title"><img src="images/KAI.png"
                    style="width:185px; height:28px; margin-left:10px;" /></a>
        </div>

        <div class="clearfix"></div>

        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/man.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $_SESSION['nama_lengkap']?></h2>
            </div>
        </div>

        <br />

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="../admin"><i class="fa fa-home"></i> Home </a></li>
                    <li><a><i class="fa fa-puzzle-piece"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="barang">Data barang</a></li>
                            <li><a href="inventaris">Inventaris</a></li>
                            <li><a href="anggota">Anggota</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-gears"></i> Komponen <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="kategori">Kategori</a></li>
                            <li><a href="merk">Merk</a></li>
                            <li><a href="series">Series</a></li>
                            <li><a href="unit_pengadaan">Unit Pengadaan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>