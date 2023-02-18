<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Admin Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"
                                        class="breadcrumb-link">Admin</a></li>
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
                        Tambah Data Admin Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Lengkap</label>
                                <div class="col-md-9">
                                    <input type="text" name="nama_lengkap" required placeholder="Nama Lengkap"
                                        class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tempat Lahir</label>
                                <div class="col-md-9">
                                    <input type="text" name="tempat_lahir" required placeholder="Tempat Lahir"
                                        class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tanggal Lahir</label>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal_lahir" required placeholder="Tanggal Lahir"
                                        class="form-control">
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
                                    <input type="text" name="no_telp" required placeholder="No Telepon"
                                        class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('petugas') ?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>