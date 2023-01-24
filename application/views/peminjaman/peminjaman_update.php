<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Peminjaman Buku Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('peminjaman')?>" class="breadcrumb-link">Peminjaman Buku</a></li>
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
                        Perbaharui Data Peminjaman Buku Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_pinjam" value="<?= $peminjaman->id_pinjam?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Tanggal Pinjam</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_pinjam" value="<?= $peminjaman->tanggal_pinjam ?>" required placeholder="Tanggal Pinjam" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Tanggal Kembali</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_kembali" value="<?= $peminjaman->tanggal_kembali ?>" required placeholder="Tanggal Kembali" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Nama Anggota</label>
                                <div class="col-md-10">
                                    <select name="anggota_id" required class="form-control">
                                        <option value="">Pilih Nama Anggota</option>
                                        <?php
                                        foreach($anggota as $a){
                                            $selected = ($a->id_anggota == $peminjaman->anggota_id) ? "selected" : "";
                                            echo "<option value='$a->id_anggota' $selected>$a->nama_anggota</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Judul Buku</label>
                                <div class="col-md-10">
                                    <select name="buku_id" required class="form-control">
                                        <option value="">Pilih Judul Buku</option>
                                        <?php
                                        foreach($buku as $a){
                                            $selected = ($a->id_buku == $peminjaman->buku_id) ? "selected" : "";
                                            echo "<option value='$a->id_buku' $selected>$a->judul_buku</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Total Pinjam Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="total_buku" value="<?= $peminjaman->total_buku ?>" required placeholder="Total Pinjam Buku" class="form-control">
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