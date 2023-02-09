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
                                    <th>Rak</th>
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
                                            <td>".$a->penulis."</td>
                                            <td>".$a->penerbit."</td>
                                            <td>".$a->tahun_terbit."</td>
                                            <td>".$a->stok_buku."</td> 
                                            <td>".$a->harga_buku."</td>  
                                            <td>".$a->nama_rak."</td>                     
                                            
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                        <br><br>
                        <a href="<?= base_url('HomeAnggota') ?>" class="btn btn-sm btn-danger float-right"> Kembali</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>            
</div>