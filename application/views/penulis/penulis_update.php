<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Penulis</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('penulis')?>" class="breadcrumb-link">Penulis</a></li>
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
                        Perbaharui Data Penulis
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_penulis" value="<?= $penulis->id_penulis?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kode Peulis</label>
                                <div class="col-md-10">
                                    <input type="text" name="kd_penulis" value="<?= $penulis->kd_penulis ?>" required placeholder="Kode Penulis" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Penulis</label>
                                <div class="col-md-10">
                                    <input type="text" name="penulis" value="<?= $penulis->penulis ?>" required placeholder="Penulis" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('penulis')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>