<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Pengembalian Buku Perpustakaan </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pengembalian') ?>"
                                        class="breadcrumb-link">Pengembalian Buku</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tampil Data</li>
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
                        <form class="row g-3" method="post"
                            action="<?php echo base_url(); ?>laporan/printDataPengembalian" target="_blank">
                            <div class="col-auto">
                                <input type="date" class="form-control" name="startDate" id="start_date">

                            </div>
                            <div class="col-auto">
                                <input name="endDate" class="form-control" type="date" id="end_date">
                            </div>
                            <div class="col-7">
                                <button class="btn btn-primary float-right" type="submit" id="print-data">Cetak</button>
                        </form>
                    </div>

                </div>
                <div class="float-right card-header col-4">
                    <input type="text" placeholder="masukkan nama anggota. . ." class="form-control float-right"
                        id="name_filter">
                </div>
                <div class="card-body">
                    <?php


                    if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "2") {
                        echo '<style> .menuadmin { display: none; } </style>';
                        echo '<style> .menuuser { display: block; } </style>';
                    } else if (isset($_SESSION["role_id"]) && $_SESSION["role_id"] === "1") {
                        echo '<style> .menuadmin { display: block; } </style>';
                        echo '<style> .menuuser { display: none; } </style>';
                    }
                    ?>
                    <div class="menuadmin">
                        <table id="data_table" class=" table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Nama Anggota</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Lama Pinjam</th>
                                    <th>Denda</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengembalian as $a) {
                                    echo "<tr>
                                            <td>" . $no++ . "</td>
                                            <td>" . $a->judul_buku . "</td>
                                            <td>" . $a->nama_anggota . "</td>
                                            <td>" . $a->tanggal_kembali . "</td>  
                                            <td>" . $a->lama_pinjam . "</td>
                                            <td> Rp." . $a->denda . "</td>                       
                                            
                                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function () {
        $("#start_date, #end_date").on("input", function () {
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            $("#data_table tbody tr").each(function () {
                var row_date = $(this).find("td:eq(3)").text();
                if (row_date >= start_date && row_date <= end_date) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
    $(document).ready(function () {
        $("#name_filter").on("keyup", function () {
            var filter_value = $(this).val().toLowerCase();
            $("#data_table tbody tr").each(function () {
                var row_name = $(this).find("td:eq(2)").text().toLowerCase();
                if (row_name.includes(filter_value)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });

</script>