<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodeforest.net/html/books/library/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Dec 2018 05:18:11 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Book Library - Book Guide Author, Publication and Store</title>
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
<!-- Component -->
<link href="js/dl-menu/component.css" rel="stylesheet">
<!-- responsive -->
<link href="css/responsive.css" rel="stylesheet">

<link href="css/jquery.countdown.css" rel="stylesheet">
<link rel="stylesheet" href="css/foundation.css" />

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
                                <p>Selamat Datang di Perpustakaan Kami</p>
                            </div>
                            <div class="social-icon">
                               
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                      
                                </ul>
                            </div>
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
                                            <li class="menu-item kode-parent-menu"><a href="index.html">Beranda</a>
                                                <ul class="dl-submenu">
                                                    <li><a href="index-1.html">Tentang Perpustakaan</a></li>
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
            </div>
        </div>
    </header>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>Peminjaman</h2>
            <ol class="breadcrumb">
              <li><a href="#">Beranda</a></li>
              <li><a href="#">Peminjaman</a></li>
              <li class="active">Pinjam Buku</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTENT START-->
    <!--
    <div class="kode-content">
        <div class="container">
         <div class="coming-soon">
            <h2>Peminjaman Buku</h2>
           <div class="search-field">
            <input type="text" placeholder="No Peminjaman"><br><br>
            <input type="text" placeholder="Kode Buku"><br><br>
            <input type="text" placeholder="ID Anggota"><br><br>
            <input type="text" placeholder="Nama"><br><br>
            <input type="text" placeholder="Tanggal Peminjaman"><br><br>
            </div>
             <button>Pinjam Buku</button>
    -->
 <?php
          echo '<p><h3>Your Shopping Cart</h3></p>';
          if(isset($_SESSION['cart'])) {
            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {
            $result = $connect->query("SELECT id_buku, kode_buku, judul_buku, jenis_buku, qty FROM buku WHERE id = ".$product_id);
            if($result){
              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-chart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-chart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
          }
          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-chart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>
           
         </div>   
        </div>
    </div>  
    
</div>
<!--WRAPPER END-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/dl-menu/modernizr.custom.js"></script>
<script src="js/dl-menu/jquery.dlmenu.js"></script>
<script src="js/functions.js"></script>
</body>

<!-- Mirrored from kodeforest.net/html/books/library/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Dec 2018 05:18:12 GMT -->

</html>