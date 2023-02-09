<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Peminjaman Buku Perpustakaan </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('peminjaman') ?>" class="breadcrumb-link">Peminjaman Buku</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tampil Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <?php
        if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "2") {
            echo '<style> .menuadmin { display: none; } </style>';
            echo '<style> .menuuser { display: block; } </style>';
        } else if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "1") {
            echo '<style> .menuadmin { display: block; } </style>';
            echo '<style> .menuuser { display: none; } </style>';
        }
        ?>
        <div class=" row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Data Peminjaman Buku
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>NISN</th>
                                    <th>ISBN</th>
                                    <th>Lama Pinjam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($peminjaman as $a) {
                                    echo "<tr>
                                            <td>" . $no++ . "</td>
                                            <td>" . $a->tanggal_pinjam . "</td>
                                            <td>" . $a->nisn . "</td>
                                            <td>" . $a->isbn . "</td>     
                                            <td>" . $a->lama_pinjam . " Hari</td>                      
                                            
                                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <a href="<?= base_url('HomeAnggota') ?>" class="btn btn-sm btn-danger float-right"> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>