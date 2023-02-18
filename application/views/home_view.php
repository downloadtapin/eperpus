<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2">Perpustakaan</h3>
                    <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"><i class="fas fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perpustakaan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php


        if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "2") {
            echo '<style> .menuadmin { display: none; } </style>';
            echo '<style> .menuuser { display: block; } </style>';
        } else if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "1") {
            echo '<style> .menuadmin { display: block; } </style>';
            echo '<style> .menuuser { display: none; } </style>';
        }
        ?>
        <!-- ============================================================== -->
        <!-- pagehader  -->
        <!-- ============================================================== -->
        <div class="menuuser container py-3">
            <div class="row col-lg-10 mx-auto">
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">Data Buku</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('AnggotaLihat/DataBuku'); ?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">Profil Anggota</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('AnggotaLihat/ProfilAnggota/'.$this->session->userdata("id_anggota").''); ?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">History Peminjaman</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('AnggotaLihat/DataPeminjaman/' . $this->session->userdata("nisn")); ?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                        <a class="btn btn-md btn-danger" href="<?php echo base_url('Auth/logout')?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menuadmin container py-3">
            <div class="row col-lg-10 mx-auto">
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">Data Buku</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('Buku'); ?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">Data Anggota</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('anggota' . $this->session->userdata("nisn")); ?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">Data Peminjaman</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('peminjaman' . $this->session->userdata("nisn")); ?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">Data Pengembalian</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('pengembalian' . $this->session->userdata("nisn")); ?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>