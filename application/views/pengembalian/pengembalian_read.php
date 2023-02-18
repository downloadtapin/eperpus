<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Pengembalian Buku Perpustakaan </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pengembalian') ?>" class="breadcrumb-link">Pengembalian Buku</a></li>
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
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Data Pengembalian Buku
                        <a href="<?= base_url('pengembalian/tambah') ?>" class="btn btn-sm btn-success float-right">
                            <i class="fa fa-plus"></i>Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <?php


                        if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "2") {
                            echo '<style> .menuadmin { display: none; } </style>';
                            echo '<style> .menuuser { display: block; } </style>';
                        } else if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "1") {
                            echo '<style> .menuadmin { display: block; } </style>';
                            echo '<style> .menuuser { display: none; } </style>';
                        }
                        ?>
                        <div class="menuadmin">
                            <table class=" table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>Nama Anggota</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Lama Pinjam</th>
                                        <th>Denda</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pengembalian as $a) {
                                        echo "<tr>
                                            <td>" . $no++ . "</td>
                                            <td>" . $a->judul_buku . "</td>
                                            <td>" . $a->nama_anggota . "</td>
                                            <td>" . $a->tanggal_kembali . "</td>  
                                            <td>" . $a->lama_pinjam . "</td>
                                            <td> Rp." . $a->denda . "</td>                       
                                            <td>
                                                <a href=" . base_url('pengembalian/ubah/' . $a->id_kembali) . " class='btn btn-info btn-sm'>
                                                    <i class='fa fa-edit'></i> Ubah
                                                </a>
                                                <a href=" . base_url('pengembalian/hapus/' . $a->id_kembali) . " class='btn btn-danger btn-sm'
                                                    onclick='return confirm(\"ingin hapus data ini?\")'>
                                                    <i class='fa fa-trash'></i> hapus
                                                </a>
                                            </td>
                                            </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>