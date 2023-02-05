<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Pengembalian Buku Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pengembalian') ?>"
                                        class="breadcrumb-link">Pengembalian Buku</a></li>
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
                        Tambah Data Pengembalian Buku
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="from-group row">
                                <label for="" class="col-md-3">Kode Kembali</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $kode ?>" name="kd_kembali" required
                                        placeholder="Kode Pinjam" class="form-control">
                                </div>
                            </div>
                            <br>
                            <script type="text/javascript">
                                function show_text(value) {
                                    var data = value.split("|");
                                    document.getElementById("input0").value = data[0];
                                    document.getElementById("input1").value = data[1];
                                    document.getElementById("input11").value = data[5];
                                    document.getElementById("input2").value = data[2];
                                    document.getElementById("input22").value = data[4];
                                    document.getElementById("input3").value = data[3];

                                }
                            </script>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Kode Pinjam</label>
                                <div class="col-md-9">
                                    <select onchange="show_text(this.value)" name="" required class="form-control">
                                        <option value="">Pilih Kode Pinjam</option>
                                        <?php
                                        foreach ($peminjaman as $a) {
                                            echo '<option value="' . $a->kd_pinjam . '|' . $a->judul_buku . '|' . $a->nama_anggota . '|' . $a->tanggal_pinjam . '|' . $a->nisn . '|' . $a->isbn . '">' . $a->kd_pinjam . '</option>';
                                            // echo "<option value='$a->kd_pinjam'>$a->kd_pinjam</option>";
                                        }
                                        ?>
                                    </select>
                                    <input type="text" id="input0" name="kd_pinjam" required placeholder="Judul Buku"
                                        class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Judul Buku</label>
                                <div class="col-md-9">
                                    <input type="text" id="input1" name="judul_buku" required placeholder="Judul Buku"
                                        class="form-control">
                                        <input type="text" id="input11" name="isbn" required placeholder="Judul Buku"
                                        class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Anggota</label>
                                <div class="col-md-9">
                                    <input type="text" id="input2" name="nama_anggota" required
                                        placeholder="Nama Anggota" class="form-control">
                                    <input type="text" id="input22" name="nisn" required
                                        placeholder="Nama Anggota" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tanggal pinjam</label>
                                <div class="col-md-9">
                                    <input type="date" id="input3" name="tanggal_pinjam" required
                                        placeholder="Tanggal Kembali" class="form-control">

                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tanggal Kembali</label>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal_kembali" required placeholder="Tanggal Kembali"
                                        class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Total Pinjam Buku</label>
                                <div class="col-md-9">
                                    <input type="text" name="total_buku" required placeholder="Total Pinjam Buku"
                                        class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Denda</label>
                                <div class="col-md-9">
                                    <input type="text" name="denda" required placeholder="Denda" class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('pengembalian') ?>" class="btn btn-sm btn-danger float-right">
                                Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>