<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Anggota Perpustakaan </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('anggota')?>" class="breadcrumb-link">Anggota</a></li>
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
                        Data Anggota
                        <a href="<?= base_url('anggota/tambah')?>" class="btn btn-sm btn-success float-right">
                            <i class="fa fa-plus"></i>Tambah Data
                        </a>
                        <a href="#" target="_blank" class="btn btn-sm btn-info float-right mr-1">
                            <i class="fa fa-print"></i>Cetak Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Anggota</th>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($anggota as $a){
                                        echo "<tr>
                                            <td>".$no++."</td>
                                            <td>".$a->kd_anggota."</td>
                                            <td>".$a->nisn."</td>
                                            <td>".$a->nama_anggota."</td>
                                            <td>".$a->jenis_kelamin."</td>
                                            <td>".$a->nama_kelas."</td>     
                                            <td>".$a->alamat."</td>
                                            <td>".$a->no_telp."</td>                       
                                            <td>
                                                <a href=".base_url('anggota/ubah/'.$a->id_anggota)." class='btn btn-info btn-sm'>
                                                    <i class='fa fa-edit'></i> Ubah
                                                </a>
                                                <a href=".base_url('anggota/hapus/'.$a->id_anggota)." class='btn btn-danger btn-sm'
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