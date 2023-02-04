<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Buku Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('buku')?>" class="breadcrumb-link">Buku</a></li>
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
                        Perbaharui Data Buku Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_buku" value="<?= $buku->id_buku ?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Kode Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="kd_buku" value="<?= $buku->kd_buku ?>" required placeholder="Kode Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Kategori Buku</label>
                                <div class="col-md-10">
                                    <select name="kategori_id" required class="form-control">
                                        <option value="">Pilih Kategori Buku</option>
                                        <?php
                                        foreach($kategoribuku as $a){
                                            $selected = ($a->id_kb == $buku->kategori_id) ? "selected" : "";
                                            echo "<option value='$a->id_kb' $selected>$a->nama_kategori</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">ISBN</label>
                                <div class="col-md-10">
                                    <input type="text" name="isbn" value="<?= $buku->isbn ?>" required placeholder="ISBN" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Judul Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="judul_buku" value="<?= $buku->judul_buku ?>" required placeholder="Judul Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Penulis Buku</label>
                                <div class="col-md-10">
                                    <select name="id_penulis" required class="form-control">
                                        <option value="">Pilih Penulis Buku</option>
                                        <?php
                                        foreach($penulisbuku as $a){
                                            $selected = ($a->id_penulis == $buku->id_penulis) ? "selected" : "";
                                            echo "<option value='$a->id_penulis' $selected>$a->penulis</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Penerbit Buku</label>
                                <div class="col-md-10">
                                    <select name="id_penerbit" required class="form-control">
                                        <option value="">Pilih Penerbit Buku</option>
                                        <?php
                                        foreach($penerbit as $a){
                                            $selected = ($a->id_penerbit == $buku->id_penerbit) ? "selected" : "";
                                            echo "<option value='$a->id_penerbit' $selected>$a->penerbit</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Tahun Terbit</label>
                                <div class="col-md-10">
                                    <input type="text" name="tahun_terbit" value="<?= $buku->tahun_terbit ?>" required placeholder="Tahun Terbit" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Stok Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="stok_buku" value="<?= $buku->stok_buku ?>" required placeholder="Stok Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Harga Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="harga_buku" value="<?= $buku->harga_buku ?>" required placeholder="Harga Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Rak Buku</label>
                                <div class="col-md-10">
                                    <select name="id_rak" required class="form-control">
                                        <option value="">Pilih Rak Buku</option>
                                        <?php
                                        foreach($rak as $a){
                                            $selected = ($a->id_rak == $buku->id_rak) ? "selected" : "";
                                            echo "<option value='$a->id_rak' $selected>$a->nama_rak</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('buku')?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>