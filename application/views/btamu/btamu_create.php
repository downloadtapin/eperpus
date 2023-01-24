<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Kunjungan Tamu Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('btamu')?>" class="breadcrumb-link">Kunjungan Tamu</a></li>
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
                        Tambah Data Kunjungan Tamu Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                        <div class="from-group row">
                                <label for="" class="col-md-3">Tanggal Kunjungan</label>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal_kunjungan" required placeholder="Tanggal Kunjungan" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Lengkap</label>
                                <div class="col-md-9">
                                    <input type="text" name="nama_lengkap" required placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Kelas</label>
                                <div class="col-md-9">
                                    <select name="kelas_id" required class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        <?php
                                        foreach($kelas as $a){
                                            echo "<option value='$a->id_kelas'>$a->nama_kelas</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Keperluan</label>
                                <div class="col-md-9">
                                    <input type="text" name="keperluan" required placeholder="Keperluan" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('btamu')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>