<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2">Perpustakaan Dashboard </h3>
                    <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"><i class="fas fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perpustakaan Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php


        if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "2") {
            echo '<style> .menuadmin { display: none; } </style>';
        } else if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "1") {
            echo '<style> .menuadmin { display: block; } </style>';
        }
        ?>
        <!-- ============================================================== -->
        <!-- pagehader  -->
        <!-- ============================================================== -->
        <div class=" container py-3">
            <div class="row col-lg-10 mx-auto">
                <div class="col-md-5 py-3">
                    <div class="card round h-100">
                        <div class="card-body">
                            <h5 class="text-muted">Profil Anggota</h5>
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
                            <h5 class="text-muted">History Peminjaman</h5>
                            <div class="metric-value d-inline-block">
                                <a href="<?php echo base_url('peminjaman/index2/'.$this->session->userdata("role_id")); ?>">
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