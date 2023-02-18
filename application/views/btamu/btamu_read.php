<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Kunjungan Tamu Perpustakaan </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('btamu')?>" class="breadcrumb-link">Kunjungan Tamu</a></li>
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
                        Data Kunjungan Tamu
                        <a href="<?= base_url('btamu/tambah')?>" class="btn btn-sm btn-success float-right">
                            <i class="fa fa-plus"></i>Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Nama Lengkap</th>
                                    <th>Kelas</th>
                                    <th>Keperluan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($btamu as $a){
                                        echo "<tr>
                                            <td>".$no++."</td>
                                            <td>".$a->tanggal_kunjungan."</td>
                                            <td>".$a->nama_lengkap."</td>
                                            <td>".$a->nama_kelas."</td>     
                                            <td>".$a->keperluan."</td>                       
                                            <td>
                                                <a href=".base_url('btamu/ubah/'.$a->id_btamu)." class='btn btn-info btn-sm'>
                                                    <i class='fa fa-edit'></i> Ubah
                                                </a>
                                                <a href=".base_url('btamu/hapus/'.$a->id_btamu)." class='btn btn-danger btn-sm'
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