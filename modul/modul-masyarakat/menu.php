<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SISPEMAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/dist/img/avatar5.PNG" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ardiansyah</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="pages/#" class="nav-link">
                        <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk/modul/modul-masyarakat" class="nav-link">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            Masyarakat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk/modul/modul-pengaduan" class="nav-link">
                        <i class="nav-icon fa fa-bell" aria-hidden="true"></i>
                        <p>
                            Pengaduan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk/modul/modul-petugas" class="nav-link">
                        <i class="nav-icon fa fa-suitcase" aria-hidden="true"></i>
                        <p>
                            Petugas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk/modul/modul-tanggapan" class="nav-link">
                        <i class="nav-icon fa fa-reply" aria-hidden="true"></i>
                        <p>
                            Tanggapan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./logout.php" class="nav-link">
                        <i class="nav-icon fas fa-lock" aria-hidden="true"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>