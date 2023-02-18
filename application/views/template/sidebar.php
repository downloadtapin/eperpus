<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('home')?>"><i class="fas fa-tachometer" aria-hidden="true"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('btamu')?>"><i class="fas fa-addres-book"></i>Kunjungan Tamu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-database"></i>Master Data</a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('petugas')?>">Petugas Perpustakaan</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('anggota')?>">Anggota Perpustakaan</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('kelas')?>">Kelas</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('buku')?>">Buku</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('kategoribuku')?>">Kategori Buku</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('rak')?>">Rak Buku</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('penulis')?>">Penulis</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('penerbit')?>">Penerbit</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-archive"></i>Transaksi</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('peminjaman')?>">Transaksi Peminjaman</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('pengembalian')?>">Transaksi Pengembalian</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-file"></i>Laporan</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('laporan')?>">Laporan Anggota Perpustakaan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('laporan/LaporanPeminjamBuku')?>">Laporan Peminjaman Buku</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('laporan/LaporanPengembalianBuku')?>">Laporan Pengembalian Buku</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('laporan/LaporanBTamu')?>">Laporan Tamu Kunjungan Perpustakaan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('laporan/LaporanBuku')?>">Laporan Data Buku Perpustakaan</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                            <a class="nav-link" href="<?php echo base_url('Auth/logout')?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>