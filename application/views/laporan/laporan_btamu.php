<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <table style="width: 100%;">
            <tr>
                <td colspan="3" style="text-align: center;">PEMERINTAH PROVINSI KALIMANTAN SELATAN</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;">DINAS PENDIDIKAN DAN KEBUDAYAAN</td>
            </tr>
            <tr>
                <td style="width: 15%; ">
                    <center><img width="80" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Coat_of_arms_of_South_Kalimantan.svg/800px-Coat_of_arms_of_South_Kalimantan.svg.png"></center>
                </td>
                <td style="width: 70%;text-align: center;">
                    SMK NEGERI 1 RANTAU
                    </BR>BIDANG KEAHLIAN BISNIS DAN MANAGEMEN
                    </BR>KOMPETENSI KEAHLIAN AKUNTANSI & KEUANGAN LEMBAGA, OTOMATISASI &
                    </BR>TATA KELLOLA PERKANTORAN, BISNIS DARING & PEMASARAN
                    </BR>STATUS TERAKREDITASI A
                </td>
                <td style="width: 15%;">
                    <center><img width="80" src="https://www.smkn1rantau.sch.id/img/61LOGO_SMK-removebg-preview.png"></center>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;">Alamat:Jl.Gerilya Kec. Tapin Utara Kab. Tapin Rantau Kalimantan Selatan Kode Pos 71112</td>

            </tr>
            <tr>
                <td colspan="3" style="text-align: center;">Email:smkn1rtu30301489@gmail.com</td>
            </tr>
        </table>

        <hr class="solid">
        <div style="text-align: center;">
            <h4>LAPORAN BUKU TAMU PERPUSTAKAAN</h4>
        </div>
        <table border="1" style="width: 100%;">
            <tr>
                <th>No</th>
                <th>Tanggal Kunjungan</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Keperluan</th>
            </tr>
            <?php
            $no = 1;
            foreach ($btamu as $a) {
                echo "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $a->tanggal_kunjungan . "</td>
                    <td>" . $a->nama_lengkap . "</td>
                    <td>" . $a->nama_kelas . "</td>     
                    <td>" . $a->keperluan . "</td>                       
                    </tr>";
            }
            ?>
        </table>
    </div>
</div>