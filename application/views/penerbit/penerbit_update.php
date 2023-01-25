<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Penerbit</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('penerbit')?>" class="breadcrumb-link">Penerbit</a></li>
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
                        Perbaharui Data Penerbit
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_penerbit" value="<?= $penerbit->kd_penerbit?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kode Penerbit</label>
                                <div class="col-md-10">
                                    <input type="text" name="kd_penerbit" value="<?= $penerbit->kd_penerbit ?>" required placeholder="Kode Penerbit" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Penerbit</label>
                                <div class="col-md-10">
                                    <input type="text" name="penerbit" value="<?= $penerbit->penerbit ?>" required placeholder="Penerbit" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('penerbit')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>