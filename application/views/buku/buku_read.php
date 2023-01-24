<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Buku Perpustakaan </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('buku')?>" class="breadcrumb-link">Buku</a></li>
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
                        Data Buku
                        <a href="<?= base_url('buku/tambah')?>" class="btn btn-sm btn-success float-right">
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
                                    <th>Kode Buku</th>
                                    <th>Kategori Buku</th>
                                    <th>ISBN</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang Buku</th>
                                    <th>Penebit Buku</th>
                                    <th>Tahun Terbit Buku</th>
                                    <th>Stok Buku</th>
                                    <th>Harga_buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($buku as $a){
                                        echo "<tr>
                                            <td>".$no++."</td>
                                            <td>".$a->kd_buku."</td>
                                            <td>".$a->nama_kategori."</td>
                                            <td>".$a->isbn."</td>
                                            <td>".$a->judul_buku."</td>
                                            <td>".$a->pengarang."</td>
                                            <td>".$a->penerbit."</td>
                                            <td>".$a->tahun_terbit."</td>
                                            <td>".$a->stok_buku."</td> 
                                            <td>".$a->harga_buku."</td>                       
                                            <td>
                                                <a href=".base_url('buku/ubah/'.$a->id_buku)." class='btn btn-info btn-sm'>
                                                    <i class='fa fa-edit'></i> Ubah
                                                </a>
                                                <a href=".base_url('buku/hapus/'.$a->id_buku)." class='btn btn-danger btn-sm'
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