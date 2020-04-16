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
                        <h3>Beranda</h3>
                    </div>
                    <div class="col-50">
                        <input type="date" name="tgl">
                    </div>
                </div>
            <!--End Of Header Main-->

            <!--Main content-->
                <div class="content">
                    
                    <!-- Box Info-->
                    <div class="row">
                        <div class="col-25 box">
                            <div class="box-info b1">
                                Total Penjualan Kotor
                                <span>Rp. 23.650.000</span>
                            </div>
                        </div>
                        <div class="col-25 box">
                            <div class="box-info b2">
                                Total Laba Kotor
                                <span>Rp. 23.650.000</span>
                            </div>
                        </div>
                        <div class="col-25 box ">
                            <div class="box-info b3">
                                Total Transaksi
                                <span>27 Transaksi</span>
                            </div>
                        </div>
                        <div class="col-25 box ">
                            <div class="box-info b1">
                                Total Penjualan Kotor
                                <span>Rp. 23.650.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Of Box info-->

                    <!-- Info Table -->
                    <div class="row info-table">
                        <div class="col-70">
                            <span>Penjualan</span>
                            <i>April 20</i>
                            <br>
                            <div class="row">
                                <table>
                                    <tr>
                                        <td>02 April 20</td>
                                        <td>Bpk Rukun - Bunut, Samping Patung udang</td>
                                        <td>Rp. 2.750.000</td>
                                        <td><a href="#">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>02 April 20</td>
                                        <td>Bpk Rukun - Bunut, Samping Patung udang</td>
                                        <td>Rp. 2.750.000</td>
                                        <td><a href="#">Lihat</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-30">
                            <span>Barang Favorit</span>
                            <i>Barang barang terlaris</i>
                            <br>
                            <div class="row">
                                <table>
                                    <tr>
                                        <td>Spandex 0.30 x 6mtr</td>
                                        <td>Rp. 45.000</td>
                                    </tr>
                                    <tr>
                                        <td>Spandex 0.30 x 6mtr</td>
                                        <td>Rp. 45.000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end of info table-->


                </div>
            <!--End Of Main Content-->

        </div>
    <!--end of mainpage -->



        <script>
            feather.replace()
        </script>
</body>
</html>