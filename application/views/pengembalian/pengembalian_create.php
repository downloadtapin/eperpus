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
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pengembalian') ?>" class="breadcrumb-link">Pengembalian Buku</a></li>
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
                                    <input type="text" value="<?php echo $kode ?>" name="kd_kembali" required placeholder="Kode Pinjam" class="form-control">
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
                                    document.getElementById("lamapinjam").value = data[6];

                                }
                            </script>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Kode Pinjam</label>
                                <div class="col-md-9">
                                    <select onchange="show_text(this.value)" name="" required class="form-control">
                                        <option value="">Pilih Kode Pinjam</option>
                                        <?php
                                        foreach ($peminjaman as $a) {
                                            echo '<option value="' . $a->kd_pinjam . '|' . $a->judul_buku . '|' . $a->nama_anggota . '|' . $a->tanggal_pinjam . '|' . $a->nisn . '|' . $a->isbn . '|' . $a->lama_pinjam . '">' . $a->kd_pinjam . '</option>';
                                            // echo "<option value='$a->kd_pinjam'>$a->kd_pinjam</option>";
                                        }
                                        ?>
                                    </select>
                                    <input type="text" style="display: none" id="input0" name="kd_pinjam" required placeholder="Judul Buku" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Judul Buku</label>
                                <div class="col-md-9">
                                    <input type="text" id="input1" name="judul_buku" required placeholder="Judul Buku" class="form-control">
                                    <input style="display: none" type="text" id="input11" name="isbn" required placeholder="Judul Buku" class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="from-group row">
                                <label for="" class="col-md-3">Nama Anggota</label>
                                <div class="col-md-9">
                                    <input type="text" id="input2" name="nama_anggota" required placeholder="Nama Anggota" class="form-control">
                                    <input style="display: none" type="text" id="input22" name="nisn" required placeholder="Nama Anggota" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tanggal pinjam</label>
                                <div class="col-md-9">
                                    <input type="date" id="input3" name="tanggal_pinjam" required placeholder="Tanggal Kembali" class="form-control">

                                </div>
                            </div>
                            <br>
                            <div class="from-group row">
                                <label for="" class="col-md-3">Tanggal Kembali</label>
                                <div class="col-md-9">
                                    <input type="date" id="tanggal_kembali" name="tanggal_kembali" required placeholder="Tanggal Kembali" class="form-control">
                                    
                                </div>
                            </div>
                            <br>
                            <input type="text" name="lama_pinjam" id="lamapinjam" >

                            <br>
                            <a href="<?= base_url('pengembalian') ?>" class="btn btn-sm btn-danger float-right">
                                Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">
                                Simpan</button>
                        </form>
                        

                        <!-- <script>
                            const startDate = document.querySelector('#input3');
                            const endDate = document.querySelector('#tanggal_kembali');
                            const result = document.querySelector('#result');

                            startDate.addEventListener('input', calculate);
                            endDate.addEventListener('input', calculate);

                            function calculate() {
                                const start = new Date(startDate.value);
                                const end = new Date(endDate.value);
                                const diffTime = Math.abs(end - start);
                                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                                result.value = diffDays;
                            }
                        </script>
                        <script>
                            const number1 = document.querySelector('#result');
                            const number2 = document.querySelector('#total_buku');
                            const result2 = document.querySelector('#result2');

                            number1.addEventListener('input', calculate2);
                            number2.addEventListener('input', calculate2);

                            function calculate2() {
                                result2.value = parseInt(number1.value) * parseInt(number2.value);
                            }
                        </script>
                        <script>
                            const lamapinjam = document.querySelector('#result');
                            const lamapinjam2 = document.querySelector('#lamapinjam');
                            const hasil = document.querySelector('#hasil');

                            lamapinjam.addEventListener('input', calculate3);
                            lamapinjam2.addEventListener('input', calculate3);

                            function calculate3() {
                                hasil.value = parseInt(lamapinjam.value) - parseInt(lamapinjam2.value);
                            }
                        </script> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>