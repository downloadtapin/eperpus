<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Admin Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('admin')?>" class="breadcrumb-link">Admin</a></li>
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
                        Perbaharui Data Admin Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_admin" value="<?= $petugas->id_admin ?>">
                           
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Lengkap</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_lengkap" value="<?= $petugas->nama_lengkap ?>" required placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Username</label>
                                <div class="col-md-10">
                                    <input type="text" name="username" value="<?= $petugas->username ?>" required placeholder="Username" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Password</label>
                                <div class="col-md-10">
                                    <input type="text" name="password" value="<?= $petugas->password ?>" required placeholder="Password" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                            <label for="" class="col-md-2">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Alamat</label>
                                <div class="col-md-10">
                                    <input type="text" name="alamat" value="<?= $petugas->alamat ?>" required placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">No Telepon</label>
                                <div class="col-md-10">
                                    <input type="text" name="no_telp" value="<?= $petugas->no_telp ?>" required placeholder="Password" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('admin')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>