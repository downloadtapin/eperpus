<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Buku Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('buku')?>" class="breadcrumb-link">Buku</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
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
                        Tambah Data Buku Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                        <div class="from-group row">
                                <label for="" class="col-md-3">Kode Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="kd_buku" required placeholder="Kode Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Kategori Buku</label>
                                <div class="col-md-9">
                                    <select name="kategori_id" required class="form-control">
                                        <option value="">Pilih Kategori Buku</option>
                                        <?php
                                        foreach($kategoribuku as $a){
                                            echo "<option value='$a->id_kb'>$a->nama_kategori</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">ISBN</label>
                                <div class="col-md-9">
                                    <input type="text" name="isbn" required placeholder="ISBN" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Judul Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="judul_buku" required placeholder="Judul Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Pengarang Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="pengarang" required placeholder="Pengarang Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Penerbit Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="penerbit" required placeholder="Penerbit Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tahun Terbit Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="tahun_terbit" required placeholder="Tahun Terbit" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Stok Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="stok_buku" required placeholder="Stok Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Harga Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="harga_buku" required placeholder="Harga Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('buku')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>