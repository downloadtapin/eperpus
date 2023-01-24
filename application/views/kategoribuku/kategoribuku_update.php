<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Kategori Buku</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('kategori_buku')?>" class="breadcrumb-link">Kategori Buku</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perbaharui Data</li>
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
                        Perbaharui Data Kategori Buku
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_kb" value="<?= $kategori_buku->id_kb?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kode Kategori Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="kode_kategori" value="<?= $kategori_buku->kode_kategori ?>" required placeholder="Kode Kategori Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Kategori Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_kategori" value="<?= $kategori_buku->nama_kategori ?>" required placeholder="Nama Kategori Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('kategori_buku')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>