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
                        <h3>Barang</h3>
                    </div>
                    <div class="col-50">
                        <a href="#" class="tbl-sd bgBlue">Tambah Barang</a>
                        <a href="#" class="tbl-sd brOrange">Export</a>
                        <a href="#" class="tbl-sd brGreen">Import</a>
                    </div>
                </div>
            <!--End Of Header Main-->

            <!--Main content-->
                <div class="content">

                    <!-- info barang-->
                        <div class="row info-brg">
                            Total Produk : 123 / Total Stok : 240 / Total Modal : Rp. 427.650.000
                        </div>
                    <!--end of info-->

                    <!-- Search & Filter Produk-->
                        <div class="row search">
                            <span><i data-feather="search"></i></span>
                            <input type="text" id="searchKu" placeholder="Cari Barang ... ">
                            <span><i data-feather="folder"></i></span>
                            <select name="kategori" id="kategoriKu">
                                <option value="">Pilih Kategori</option>
                                <option value="Canal">Canal</option>
                                <option value="Reng">Reng</option>
                                <option value="pvc">PVC</option>
                            </select>
                            <span><i data-feather="filter"></i></span>
                            <input type="text" name="sort" id="sortKu" placeholder="Sort By">
                        </div>
                    <!--End of Search-->

                    <!--Data Barang-->
                        <div class="tabel-barang">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Modal</th>
                                        <th>Harga Jual</th>
                                        <th>Stok</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BRG0001</td>
                                        <td>Spandex 6 x 0.30</td>
                                        <td>36700</td>
                                        <td>45000</td>
                                        <td>120 Lbr</td>
                                        <td>Edit</td>
                                    </tr>
                                    <tr>
                                        <td>BRG0001</td>
                                        <td>Spandex 6 x 0.30</td>
                                        <td>36700</td>
                                        <td>45000</td>
                                        <td>120 Lbr</td>
                                        <td>Edit</td>
                                    </tr>
                                    <tr>
                                        <td>BRG0001</td>
                                        <td>Spandex 6 x 0.30</td>
                                        <td>36700</td>
                                        <td>45000</td>
                                        <td>120 Lbr</td>
                                        <td>Edit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <!--End Of Data Barang-->

                </div>
            <!--End Of Main Content-->



        </div>
    <!--end of mainpage -->



        <script>
            feather.replace()
        </script>
</body>
</html>