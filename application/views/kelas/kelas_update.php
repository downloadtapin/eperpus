<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Kelas</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('kelas')?>" class="breadcrumb-link">Kelas</a></li>
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
                        Perbaharui Data Kelas
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_kelas" value="<?= $kelas->id_kelas?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kode Kelas</label>
                                <div class="col-md-10">
                                    <input type="text" name="kd_kelas" value="<?= $kelas->kd_kelas ?>" required placeholder="Kode Kelas" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Kelas</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_kelas" value="<?= $kelas->nama_kelas ?>" required placeholder="Nama Kelas" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Jumlah Siswa</label>
                                <div class="col-md-10">
                                    <input type="text" name="jumlah_siswa" value="<?= $kelas->jumlah_siswa ?>" required placeholder="Jumlah Siswa" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('kelas')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>