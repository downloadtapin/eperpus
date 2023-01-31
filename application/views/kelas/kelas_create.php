<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Kelas</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('kelas')?>" class="breadcrumb-link">Kelas</a></li>
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
                        Tambah Data Kelas
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                        <div class="from-group row">
                                <label for="" class="col-md-3">Kode Kelas</label>
                                <div class="col-md-9">
                                    <input value="<?php echo $kode ?>" type="text" name="kd_kelas" required placeholder="Kode Kelas" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Kelas</label>
                                <div class="col-md-9">
                                    <input type="text" name="nama_kelas" required placeholder="Nama Kelas" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Jumlah Siswa</label>
                                <div class="col-md-9">
                                    <input type="text" name="jumlah_siswa" required placeholder="Jumlah" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('kelas')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>