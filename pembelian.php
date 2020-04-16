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
                        <h3>Pembelian</h3>
                    </div>
                    <div class="col-50">
                        <a href="#" class="tbl-sd bgBlue">Buat PO</a>
                    </div>
                </div>
            <!--End Of Header Main-->

            <!--Main content-->
                <div class="content">

                    <!-- info Nota-->
                        <div class="row info-brg">
                            Total Transaksi : 123 / Total Stok Masuk : 240 / Total Pembelanjaan : Rp. 427.650.000
                        </div>
                    <!--end of info-->

                    <!-- Search & Filter Nota-->
                        <div class="row search">
                            <span><i data-feather="search"></i></span>
                            <input type="text" id="searchKu" placeholder="Cari Nota ... ">
                            <span><i data-feather="briefcase"></i></span>
                            <select name="kategori" id="kategoriKu">
                                <option value="">Pilih Suplier</option>
                                <option value="Canal">PT. Kencana Intan Metalindo</option>
                                <option value="Reng">PT. Global Indonesia Asia Sejahtera</option>
                                <option value="pvc">PT. Surya Cipta Perkasa</option>
                            </select>
                            <span><i data-feather="filter"></i></span>
                            <input type="text" name="sort" id="sortKu" placeholder="Sort By">
                        </div>
                    <!--End of Search-->

                    <!--Data Nota-->
                        <div class="tabel-barang">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tgl PO</th>
                                        <th>Nama Suplier</th>
                                        <th>Jumlah Nota</th>
                                        <th>Pembayaran</th>
                                        <th>Sisa Nota</th>
                                        <th>Status PO</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>02 April 20</td>
                                        <td>PT. Kencana Intan Metalindo</td>
                                        <td>Rp. 37.975.000</td>
                                        <td>Rp. 30.000.000</td>
                                        <td>Rp. 7.975.000</td>
                                        <td>Belum Lengkap</td>
                                        <td>
                                            <a href="#" class="tbl-sc brOrange">Update PO</a>
                                            <a href="#" class="tbl-sc brGreen">Bayar</a>
                                            <a href="#" class="tbl-sc brBlue">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02 April 20</td>
                                        <td>PT. Global Indonesia Asia Sejahtera</td>
                                        <td>Rp. 47.975.000</td>
                                        <td>Rp. 30.000.000</td>
                                        <td>Rp. 17.975.000</td>
                                        <td>Lengkap</td>
                                        <td>
                                            <a href="#" class="tbl-sc brGreen">Bayar</a>
                                            <a href="#" class="tbl-sc brBlue">Lihat</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <!--End Of Data Nota-->

                </div>
            <!--End Of Main Content-->



        </div>
    <!--end of mainpage -->



        <script>
            feather.replace()
        </script>
</body>
</html>