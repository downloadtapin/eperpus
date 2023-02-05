<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Peminjaman Buku Perpustakaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('peminjaman') ?>"
                                        class="breadcrumb-link">Peminjaman Buku</a></li>
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
                        Tambah Data Peminjaman Buku
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="from-group row">
                                <label for="" class="col-md-3">Kode Pinjam</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $kode ?>" name="kd_pinjam" required
                                        placeholder="Total Pinjam Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tanggal Pinjam</label>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal_pinjam" required placeholder="Tanggal Pinjam"
                                        class="form-control">
                                </div>
                            </div>
                            <br>

                            <script type="text/javascript">
                                function show_text(value) {
                                    var data = value.split("|");
                                    document.getElementById("text_area0").value = data[0];
                                    document.getElementById("text_area1").innerHTML = data[1];
                                    document.getElementById("text_area10").value = data[1];
                                    document.getElementById("text_area2").innerHTML = data[2];
                                    document.getElementById("text_area3").innerHTML = data[3];
                                    document.getElementById("text_area4").innerHTML = data[4];
                                }
                                function show_text2(value) {
                                    var data = value.split("|");
                                    document.getElementById("text_area9").value = data[0];
                                    document.getElementById("text_area5").innerHTML = data[1];
                                    document.getElementById("text_area11").value = data[1];
                                    document.getElementById("text_area6").innerHTML = data[2];
                                    document.getElementById("text_area7").innerHTML = data[3];
                                    document.getElementById("text_area8").innerHTML = data[4];
                                }

                            </script>
                            <div class="from-group row">
                                <label for="" class="col-md-3">NISN<br><br>
                                    <p>Data Anggota</p>
                                </label>

                                <div class="col-md-9">
                                    <select onchange="show_text(this.value)" name="anggota_id" required
                                        class="form-control">
                                        <option value="">Pilih NISN</option>
                                        <?php
                                        foreach ($anggota as $a) {
                                            // echo "<option value='$a->id_anggota'>$a->nama_anggota</option>";
                                            echo '<option value="' . $a->nisn . '|' . $a->nama_anggota . '|' . $a->jenis_kelamin . '|' . $a->alamat . '|' . $a->no_telp . '">' . $a->nisn . '</option>';
                                        }

                                        ?>
                                    </select>
                                    <br>
                                    <input  style="display:none;" type="text" name="nama_anggota" id="text_area10">
                                    <input  style="display:none;" type="text" name="judul_buku" id="text_area11">
                                    <input style="display: none;" type="text" name="nisn" id="text_area0">
                                    <div style="padding:2px 2px 2px 5px;border:1px solid black;line-height: 10px; ">
                                        
                                        <h5>Nama Anggota : <span id="text_area1"></span> </h5>
                                        <h5>Jenis Kelamin :<span id="text_area2"></span></h5>
                                        <h5>Alamat :<span id="text_area3"></span></h5>
                                        <h5>No Telpon :<span id="text_area4"></span></h5>
                                    </div>


                                </div>
                            </div>
                            <br>

                            <div class="from-group row">
                                <label for="" class="col-md-3">ISBN</label>
                                <div class="col-md-9">
                                    <select onchange="show_text2(this.value)" name="buku_id" required
                                        class="form-control">
                                        <option value="">Pilih ISBN</option>
                                        <?php
                                        foreach ($buku as $a) {
                                            echo '<option value="' . $a->isbn . '|' . $a->judul_buku . '|' . $a->penerbit . '|' . $a->tahun_terbit . '|' . $a->nama_rak . '">' . $a->isbn . '</option>';
                                            // echo "<option value='$a->id_buku'>$a->judul_buku</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <input style="display: none;" type="text" name="isbn" id="text_area9">
                                    <div style="padding:2px 2px 2px 5px;border:1px solid black;line-height: 10px; ">
                                        <h5>Judul Buku : <span id="text_area5"></span> </h5>
                                        <h5>Penerbit :<span id="text_area6"></span></h5>
                                        <h5>Tahun Terbit :<span id="text_area7"></span></h5>
                                        <h5>Rak :<span id="text_area8"></span></h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="from-group row">
                                <label for="" class="col-md-3">Lama Pinjam</label>
                                <div class="col-md-9">
                                    <input type="text" name="lama_pinjam" required placeholder="lama Pinjam"
                                        class="form-control">
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('peminjaman') ?>" class="btn btn-sm btn-danger float-right"> Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>