<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Anggota Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('anggota')?>" class="breadcrumb-link">Anggota</a></li>
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
                        Tambah Data Anggota Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                        <div class="from-group row">
                                <label for="" class="col-md-3">Kode Anggota</label>
                                <div class="col-md-9">
                                    <input value="<?= $kode ?>" type="text" name="kd_anggota" required placeholder="Kode Anggota" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">NISN</label>
                                <div class="col-md-9">
                                    <input type="text" name="nisn" required placeholder="NISN" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Username</label>
                                <div class="col-md-9">
                                    <input type="text" name="username" required placeholder="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" required placeholder="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Lengkap</label>
                                <div class="col-md-9">
                                    <input type="text" name="nama_anggota" required placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Alamat</label>
                                <div class="col-md-9">
                                    <input type="text" name="alamat" required placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">No Telepon</label>
                                <div class="col-md-9">
                                    <input type="text" name="no_telp" required placeholder="No Telepon" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('anggota')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>