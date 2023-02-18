<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Profil Anggota Perpustakaan</h2>
                    <div class="page-breadcrumb">

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
                        Profil Anggota Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_anggota" value="<?= $anggota->id_anggota ?>">
                            <div class="from-group row">
                                <label for="" class="col-md-3">Kode Anggota</label>
                                <div class="col-md-5">
                                    <p> : <?= $anggota->kd_anggota ?></p>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">NISN</label>
                                <div class="col-md-5">
                                    <p> : <?= $anggota->nisn ?></p>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Lengkap</label>
                                <div class="col-md-5">
                                    <p> : <?= $anggota->nama_anggota ?></p>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Jenis Kelamin</label>
                                <div class="col-md-5">
                                        <?php
                                        if ($anggota->jenis_kelamin === "P") {
                                            $jkel = "Perempuan";
                                        } else {
                                            $jkel = "Laki-Laki";
                                        }
                                        ?>
                                    <p> : <?php echo $jkel ?></p>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Alamat</label>
                                <div class="col-md-5">
                                    <p> : <?= $anggota->alamat ?></p>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">No Telepon</label>
                                <div class="col-md-5">
                                    <p> : <?= $anggota->no_telp ?></p>
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('HomeAnggota') ?>" class="btn btn-sm btn-danger float-right"> Kembali</a>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>