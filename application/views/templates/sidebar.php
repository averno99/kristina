<!-- Sidebar -->
<?php if ($this->session->userdata('role_id') == 1) : ?>


    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-code"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SIGMPKB</div>
        </a>

        <!-- Divider --> Kelola Data
        <hr class="sidebar-divider ">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User'); ?>">
                <i class="fa fa-users"></i>
                <span>Data User</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('penduduk'); ?>">
                <i class="fa fa-database"></i>
                <span>Data Jumlah Penduduk</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pus'); ?>">
                <i class="fa fa-database"></i>
                <span>Data Jumlah Pasangan Usia Subur</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('akseptor'); ?>">
                <i class="fa fa-database"></i>
                <span>Data Jumlah Akseptor KB</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pelayanan'); ?>">
                <i class="fa fa-database"></i>
                <span>Data Jumlah Pelayanan KB</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kelahiran'); ?>">
                <i class="fa fa-database"></i>
                <span>Data Jumlah Kelahiran Bayi</span></a>
        </li>
        <!-- Divider --> Menu
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kecamatan'); ?>">
                <i class="fa fa-database"></i>
                <span>Kecamatan</span></a>
        </li>

        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa fa-calculator"></i>
                <span>Perhitungan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" href="<?= site_url('total') ?>">Harkat Total</a>
                    <a class="collapse-item" href="<?= site_url('maksimum') ?>">Harkat Maksimum</a>
                    <a class="collapse-item" href="<?= site_url('persentase') ?>">Persentase</a>

                </div>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pemetaan'); ?>">
                <i class="fa fa-map-marker-alt"></i>
                <span>Pemetaan</span></a>

        </li>



        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
<?php else : ?>
    <?php include 'sb_pegawai.php'; ?>
<?php endif; ?>
<!-- End of Sidebar -->