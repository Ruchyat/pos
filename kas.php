<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRA TRUSS</title>
    <link rel="icon" href="lib/pic/favicon.png">
    <link rel="stylesheet" href="lib/css/style.css">
    <script src="lib/js/feather-icon.js"></script>
</head>
<body>
    <!-- Navigation Head-->
        <div class="nav-head">
            <a href="#">
                <img src="lib/pic/ctLogo.png"> 
            </a>
            <span class="user feat">
                <i data-feather="user"></i>
            </span>
            <span class="user">
                Ruhyat Nasihin <br>
                <i>Admin</i>
            </span>
        </div>
    <!-- end of nav head-->

    <!-- Side bar-->
        <div class="side-bar">
            <a href="index.html"> <span> <i data-feather="home"></i> </span> Beranda </a>
            <a href="barang.html"> <span> <i data-feather="box"></i> </span> Barang</a>
            <a href="pembelian.html"> <span> <i data-feather="shopping-cart"></i> </span> Pembelian</a>
            <a href="penjualan.html"> <span> <i data-feather="shopping-bag"></i> </span> Penjualan</a>
            <a href="kas.html"> <span> <i data-feather="dollar-sign"></i> </span> Kas</a>
            <a href="laporan.html"> <span> <i data-feather="clipboard"></i> </span> Laporan</a>
            <a href="pengaturan.html"> <span> <i data-feather="settings"></i> </span> Pengaturan</a>
        </div>
    <!-- end of sidebar-->

    <!-- Main Page -->
        <div class="main">

            <!-- Header Main page-->
                <div class="main-head">
                    <div class="col-50">
                        <h3>Arus Kas</h3>
                    </div>
                    <div class="col-50">
                        <a href="#" class="tbl-sd bgOrange">Tambah Pengeluaran</a>
                        <a href="#" class="tbl-sd bgBlue">Tambah Pemasukan</a>
                    </div>
                </div>
            <!--End Of Header Main-->

            <!--Main content-->
                <div class="content">

                    <!--Info Akun Kas-->
                        <div class="row">
                            <div class="col-25 info-akun">
                                <div class="isi-akun">
                                    <span>Saldo Bank BCA</span>
                                    <b>Rp. 28.850.000</b>
                                </div>
                            </div>
                            <div class="col-25 info-akun">
                                <div class="isi-akun">
                                    <span>Saldo Bank BRI</span>
                                    <b>Rp. 28.850.000</b>
                                </div>
                            </div>
                            <div class="col-25 info-akun">
                                <div class="isi-akun">
                                    <span>Saldo Uang Tunai</span>
                                    <b>Rp. 28.850.000</b>
                                </div>
                            </div>                            
                            <div class="col-25 info-akun">
                                <div class="isi-akun">
                                    <span>Total Saldo Seluruh Kas</span>
                                    <b>Rp. 28.850.000</b>
                                </div>
                            </div>
                        </div>
                    <!--End Of info Akun-->

                    <!--Recent Transc-->
                    <div class="row">

                        <div class="col-50 recent">
                            <h2>Transaksi Masuk</h2>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Tgl Trx</th>
                                        <th>Jenis</th>
                                        <th>No. Trx</th>
                                        <th>Via</th>
                                        <th>Nominal</th>
                                    </tr>
                                </thead>
                                <tbobdy>
                                    <tr>
                                        <td>02 April 20</td>
                                        <td>Penjualan</td>
                                        <td>DO-CT-20040001</td>
                                        <td>BRI</td>
                                        <td>Rp. 2.750.000</td>
                                    </tr>
                                </tbobdy>
                            </table>
                        </div>
                        <div class="col-50 recent">
                            <h2>Transaksi Keluar</h2>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Tgl Trx</th>
                                        <th>Jenis</th>
                                        <th>No. Trx</th>
                                        <th>Via</th>
                                        <th>Nominal</th>
                                    </tr>
                                </thead>
                                <tbobdy>
                                    <tr>
                                        <td>02 April 20</td>
                                        <td>Sales</td>
                                        <td>PO-CT-20040001</td>
                                        <td>BRI</td>
                                        <td>Rp. 9.750.000</td>
                                    </tr>
                                </tbobdy>
                            </table>
                        </div>

                    </div>
                    <!--end of recent transc-->

                </div>
            <!--End Of Main Content-->



        </div>
    <!--end of mainpage -->



        <script>
            feather.replace()
        </script>
</body>
</html>