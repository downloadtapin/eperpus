<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data rak Buku</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('rak_buku')?>" class="breadcrumb-link">rak Buku</a></li>
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
                        Perbaharui Data rak Buku
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_rak" value="<?= $rak->id_rak?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kode rak Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="kd_rak" value="<?= $rak->kd_rak ?>" required placeholder="Kode rak Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama rak Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_rak" value="<?= $rak->nama_rak ?>" required placeholder="Nama rak Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('rak')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>