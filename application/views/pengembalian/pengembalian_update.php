<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Pengembalian Buku Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pengembalian')?>" class="breadcrumb-link">Pengembalian Buku</a></li>
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
                        Perbaharui Data Pengembalian Buku Perpustakaan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_kembali" value="<?= $pengembalian->id_kembali?>">
                            <div class="from-group row">
                                <label for="" class="col-md-2">Judul Buku</label>
                                <div class="col-md-10">
                                    <select name="buku_id" required class="form-control">
                                        <option value="">Pilih Judul Buku</option>
                                        <?php
                                        foreach($buku as $a){
                                            $selected = ($a->id_buku == $pengembalian->buku_id) ? "selected" : "";
                                            echo "<option value='$a->id_buku' $selected>$a->judul_buku</option>";
                                        }
                                        ?>
                                    </select>
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
                                            $selected = ($a->id_anggota == $pengembalian->anggota_id) ? "selected" : "";
                                            echo "<option value='$a->id_anggota' $selected>$a->nama_anggota</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Tanggal Kembali</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_kembali" value="<?= $pengembalian->tanggal_kembali ?>" required placeholder="Tanggal Kembali" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Total Pinjam Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="total_buku" value="<?= $pengembalian->total_buku ?>" required placeholder="Total Pinjam Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-2">Denda</label>
                                <div class="col-md-10">
                                    <input type="text" name="denda" value="<?= $pengembalian->denda ?>" required placeholder="Denda" class="form-control">
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