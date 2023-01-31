<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Anggota Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('anggota')?>" class="breadcrumb-link">Anggota</a></li>
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
                        Perbaharui Data Anggota Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_anggota" value="<?= $anggota->id_anggota?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kode Anggota</label>
                                <div class="col-md-10">
                                    <input type="text" name="kd_anggota" value="<?= $anggota->kd_anggota ?>" required placeholder="Kode Anggota" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">NISN</label>
                                <div class="col-md-10">
                                    <input type="text" name="nisn" value="<?= $anggota->nisn ?>" required placeholder="NISN" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Lengkap</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_anggota" value="<?= $anggota->nama_anggota ?>" required placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                            <label for="" class="col-md-2">Jenis Kelamin</label>
                            <div class="col-md-10">
                                
                                <select name="jenis_kelamin" class="form-control">
                                    <?php 
                                    if ($anggota->jenis_kelamin==="P"){
                                        $jkel = "<option value='P'>Perempuan</option><option value='L'>Laki-Laki</option>";
                                    } else {
                                        $jkel = "<option value='L'>Laki-Laki</option><option value='P'>Perempuan</option>";
                                    }
                                    ?>
                                    <?php echo $jkel ?>
                                </select>
                            </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kelas</label>
                                <div class="col-md-10">
                                    <select name="kelas_id" required class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        <?php
                                        foreach($kelas as $a){
                                            $selected = ($a->id_kelas == $anggota->kelas_id) ? "selected" : "";
                                            echo "<option value='$a->id_kelas' $selected>$a->nama_kelas</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Alamat</label>
                                <div class="col-md-10">
                                    <input type="text" name="alamat" value="<?= $anggota->alamat ?>" required placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">No Telepon</label>
                                <div class="col-md-10">
                                    <input type="text" name="no_telp" value="<?= $anggota->no_telp ?>" required placeholder="No Telepon" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('anggota')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>