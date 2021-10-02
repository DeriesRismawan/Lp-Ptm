
<?php
	 include_once("function/koneksi.php");
	 include_once("function/helper.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DKiDS.co | Promo PTM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='description' content='Ayo nikmati promo tatap muka dengan diskon 25% ,jangan sampe ketinggalan' />
	<meta property='og:title' content='Promo Tatap Muka (PTM)' />
	<meta property='og:type' content='website' />
	<!-- <meta property='og:url' content='https://dkids.co/' /> -->
	<meta property='og:image' content='https://dkids.co/assets-promo/img/logo-dkids2.png' />
	<meta property='og:description' content='Ayo nikmati promo tatap muka dengan diskon hingga 25%  />
	<meta property='og:image:width' content='300' />
	<meta property='og:image:height' content='200' />

	<link rel="icon" type="image/png" href="assets-promo/images/logo-dkids2.png"/>
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/fonts/linearicons-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets-promo/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
</head>
	<style>
	@-webkit-keyframes blinker {
	 from {opacity: 1.0;}
	 to {opacity: 0.0;}
	}
	.blink{
	 text-decoration: blink;
	 -webkit-animation-name: blinker;
	 -webkit-animation-duration: 0.7s;
	 -webkit-animation-iteration-count:infinite;
	 -webkit-animation-timing-function:ease-in-out;
	 -webkit-animation-direction: alternate;
	}
	.carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='red' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
	}

	.carousel-control-next-icon {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='red' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
	}
	.carousel-indicators {
		left: 0;
		top: auto;
		bottom: -40px;

	}
	/* The colour of the indicators */
	.carousel-indicators li {
		background: #a3a3a3;
		border-radius: 50%;
		width: 8px;
		height: 8px;
	}

	.carousel-indicators .active {
	background: #707070;
	}
	</style>
<body class="animsition">
	<!-- <header>
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">	
					<a href="#" class="logo">
						<h2 style="font-weight: bold;color: #dc3545;">DKiDS.Co</h2>
					</a>
					<div class="menu-desktop">
						<ul class="main-menu" style="font-weight: bold;">
							<li >
								<a href="index.html">Home</a>
							</li>
							<li class="label1" data-label1="hot">
								<a href="#product">Product</a>
							</li>
							<li>
								<a href="#syarat">Terms and Conditions</a>
							</li>
							<li>
								<a href="#kontak">Contact</a>
							</li>
						</ul>
					</div>	

				</nav>
			</div>	
		</div>
	</header> -->

	<section>
		<div class="wrap-slick1">
			<div class="slick1">
				<img src="assets-promo/images/ptm_banner.png" alt="" style="width: 100%; height: auto; display: inline;">
		</div>
	</section>
<section class="bg0" id="product" >
	<div class="container">
		<div class="row ">
			<div class="col section-3 section-description wow fadeIn text-center">
				<h3  style="font-weight: bold;">Promo Produk</h3>
				<div class="divider-1 wow fadeInUp"><span></span></div><br>
			</div>
		</div>


		<!-- page dekstop -->
			<div id="produkCorausel" class="carousel slide d-none d-sm-none d-md-block" data-ride="carousel">
			
                <!-- <ol class="carousel-indicators">
                    <li data-target="#produkCorausel" data-slide-to="0" class="active"></li>
                    <li data-target="#produkCorausel" data-slide-to="1"></li>
                </ol> -->

                <div class="carousel-inner">
					<?php
						$queryproduk = $koneksi->prepare("SELECT * FROM barang 
						WHERE owner_id = 13 
						AND webshop='YES'
						AND barang_id = parent_id 
						ORDER BY barang_id ");
						$nomor = 1;
						$queryproduk->execute();
						while($dataproduk = $queryproduk->fetch()){
							 
						?>
                    <div class="carousel-item <?php if($nomor <=1){ echo 'active';} ?>">
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 mb-4">
                                <div class="card h-100" id="product">
                                    <div class='shape'>
                                        <div class='shape-text'>
                                        Promo				
                                        </div>
                                    </div>
                                    <img src="assets-promo/images/product-01.jpg" alt="IMG-PRODUCT">
                                        <div class="card-body">
                                            <p class="name-product" style="font-size:22px;width: 100%;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?=$dataproduk['nama_barang']?></p>
                                            <p class="card-title mt-n3">
                                              <a href="" style="color: #f4623a;text-decoration: none;font-size: 19px;"><?=$dataproduk['sku']?></a>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <div class='shape-diskon'>
                                                <div class='shape-diskon-text'>
                                                    25%			
                                                </div>
                                            </div>
                                            <small class='text-price float-right' style='text-decoration: line-through; color: grey;'>Rp.000</small><br> 
                                            <span class='text-price float-right' style='font-size: 17px; font-weight: bold;'><?= rupiah($dataproduk['harga_jual']) ?></span>
                                        </div>
                                </div>
                            </div>

							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 mb-4">
                                <div class="card h-100" id="product">
                                    <div class='shape'>
                                        <div class='shape-text'>
                                        Promo				
                                        </div>
                                    </div>
                                    <img src="assets-promo/images/product-01.jpg" alt="IMG-PRODUCT">
                                        <div class="card-body">
                                            <p class="name-product" style="font-size:22px;width: 100%;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?=$dataproduk['nama_barang']?></p>
                                            <p class="card-title mt-n3">
                                              <a href="" style="color: #f4623a;text-decoration: none;font-size: 19px;"><?=$dataproduk['sku']?></a>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <div class='shape-diskon'>
                                                <div class='shape-diskon-text'>
                                                    25%			
                                                </div>
                                            </div>
                                            <small class='text-price float-right' style='text-decoration: line-through; color: grey;'>Rp.000</small><br> 
                                            <span class='text-price float-right' style='font-size: 17px; font-weight: bold;'><?= rupiah($dataproduk['harga_jual']) ?></span>
                                        </div>
                                </div>
                            </div>

							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 mb-4">
                                <div class="card h-100" id="product">
                                    <div class='shape'>
                                        <div class='shape-text'>
                                        Promo				
                                        </div>
                                    </div>
                                    <img src="assets-promo/images/product-01.jpg" alt="IMG-PRODUCT">
                                        <div class="card-body">
                                            <p class="name-product" style="font-size:22px;width: 100%;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?=$dataproduk['nama_barang']?></p>
                                            <p class="card-title mt-n3">
                                              <a href="" style="color: #f4623a;text-decoration: none;font-size: 19px;"><?=$dataproduk['sku']?></a>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <div class='shape-diskon'>
                                                <div class='shape-diskon-text'>
                                                    25%			
                                                </div>
                                            </div>
                                            <small class='text-price float-right' style='text-decoration: line-through; color: grey;'>Rp.000</small><br> 
                                            <span class='text-price float-right' style='font-size: 17px; font-weight: bold;'><?= rupiah($dataproduk['harga_jual']) ?></span>
                                        </div>
                                </div>
                            </div>
							
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 mb-4">
                                <div class="card h-100" id="product">
                                    <div class='shape'>
                                        <div class='shape-text'>
                                        Promo				
                                        </div>
                                    </div>
                                    <img src="assets-promo/images/product-01.jpg" alt="IMG-PRODUCT">
                                        <div class="card-body">
                                            <p class="name-product" style="font-size:22px;width: 100%;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?=$dataproduk['nama_barang']?></p>
                                            <p class="card-title mt-n3">
                                              <a href="" style="color: #f4623a;text-decoration: none;font-size: 19px;"><?=$dataproduk['sku']?></a>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <div class='shape-diskon'>
                                                <div class='shape-diskon-text'>
                                                    25%			
                                                </div>
                                            </div>
                                            <small class='text-price float-right' style='text-decoration: line-through; color: grey;'>Rp.000</small><br> 
                                            <span class='text-price float-right' style='font-size: 17px; font-weight: bold;'><?= rupiah($dataproduk['harga_jual']) ?></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

					<?php $nomor++; } ?>
                </div>
                <a class="carousel-control-prev" href="#produkCorausel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#produkCorausel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>

			<!-- page mobile -->
			<div id="produkCorauselmobile" class="carousel slide d-block d-block d-sm-block d-md-none" data-ride="carousel">
			
                <!-- <ol class="carousel-indicators">
                    <li data-target="#produkCorausel" data-slide-to="0" class="active"></li>
                    <li data-target="#produkCorausel" data-slide-to="1"></li>
                </ol> -->
                <div class="carousel-inner">
					<?php
						$queryproduk = $koneksi->prepare("SELECT * FROM barang 
						WHERE owner_id = 13 
						AND webshop='YES'
						AND barang_id = parent_id 
						ORDER BY barang_id ");
						$nomor = 1;
						$queryproduk->execute();
						while($dataproduk = $queryproduk->fetch()){
							 
						?>
                    <div class="carousel-item <?php if($nomor <=1){ echo 'active';} ?>">
                        <div class="row">
							
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 mb-4">
                                <div class="card h-100" id="product">
                                    <div class='shape'>
                                        <div class='shape-text'>
                                        Promo				
                                        </div>
                                    </div>
                                    <img src="assets-promo/images/product-01.jpg" alt="IMG-PRODUCT">
                                        <div class="card-body">
                                            <p class="name-product" style="font-size:16px;width: 100%;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?=$dataproduk['nama_barang']?></p>
                                            <p class="card-title mt-n3">
                                              <a href="" style="color: #f4623a;text-decoration: none;font-size: 15px;"><?=$dataproduk['sku']?></a>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <div class='shape-diskon'>
                                                <div class='shape-diskon-text'>
                                                    25%			
                                                </div>
                                            </div>
                                            <small class='text-price float-right' style='text-decoration: line-through; color: grey;'>Rp.000</small><br> 
                                            <span class='text-price float-right' style='font-size: 17px; font-weight: bold;'><?= rupiah($dataproduk['harga_jual']) ?></span>
                                        </div>
                                </div>
                            </div>

							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 mb-4">
                                <div class="card h-100" id="product">
                                    <div class='shape'>
                                        <div class='shape-text'>
                                        Promo				
                                        </div>
                                    </div>
                                    <img src="assets-promo/images/product-01.jpg" alt="IMG-PRODUCT">
                                        <div class="card-body">
                                            <p class="name-product" style="font-size:16px;width: 100%;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?=$dataproduk['nama_barang']?></p>
                                            <p class="card-title mt-n3">
                                              <a href="" style="color: #f4623a;text-decoration: none;font-size: 15px;"><?=$dataproduk['sku']?></a>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <div class='shape-diskon'>
                                                <div class='shape-diskon-text'>
                                                    25%			
                                                </div>
                                            </div>
                                            <small class='text-price float-right' style='text-decoration: line-through; color: grey;'>Rp.000</small><br> 
                                            <span class='text-price float-right' style='font-size: 17px; font-weight: bold;'><?= rupiah($dataproduk['harga_jual']) ?></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

					<?php $nomor++; } ?>
                </div>
                <a class="carousel-control-prev" href="#produkCorauselmobile" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#produkCorauselmobile" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>

	</div>
</section>

<!-- syarat & ketentuan -->
<section class="bg0 p-t-23" id="syarat">
	<div class="container">
		<div class="row">
			<div class="col section-3 section-description wow fadeIn ">
				<h4  style="font-weight: bold;text-align: center; padding-bottom: 8px;">Syarat dan ketentuan promo PTM</h4>
				<div class="divider-1 wow fadeInUp text-center"><span></span></div>

				<div class="section-title d-none d-md-none d-lg-block" style="font-weight: 500; font-size: 20px;margin-left: 15%;">
					<ol>
						<li>1. Promo PTM berlaku mulai 1 oktober hingga 31 oktober 2021</li>
						<li>2. Akses <a href="https://store.dkids.co" target="_blank" >https://store.dkids.co</a> kemudian login dengan no hp dan password akun DKiDS anda</li>
						<li>3. Jika belum memiliki akun, silahkan hubungi Admin CS</li>
						<li>4. Setelah login cari tombol berwarna merah bertuliskan Event</li>
						<li>5. Klik Event lalu dapatkan produk promo PTM bertabur diskon yang anda inginkan</li>
					</ol>
				</div>

				<div class="section-title d-block d-md-block d-lg-none" style="font-weight: 500; font-size: 18px;text-align: left; ">
					<ol style="padding: 0 15px 0 0;">
						<li>1. Promo PTM berlaku mulai 1 oktober hingga 31 oktober 2021</li>
						<li>2. Akses <a href="https://store.dkids.co" target="_blank" >https://store.dkids.co</a> kemudian login dengan no hp dan password akun DKiDS anda</li>
						<li>3. Jika belum memiliki akun, silahkan hubungi Admin CS</li>
						<li>4. Setelah login cari tombol berwarna merah bertuliskan Event</li>
						<li>5. Klik Event lalu dapatkan produk promo PTM bertabur diskon yang anda inginkan</li>
					</ol>
				</div>
				<h3 class="text-center text-danger mb-5" style="font-weight: bold;"><span class="blink">Ayo cepetan !! jangan sampai kehabisan :)</span></h3>
			</div>
		</div>
	</div>
</section>


<!--footer  -->
<footer id="kontak">
	<div class="footer-top d-none d-md-none d-lg-block">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-about wow fadeInUp">
					<img class="logo-footer" src="assets-promo/images/logo-dkids2.png" alt="logo-footer" data-at2x="assets-promo/images/logo-dkids2.png">
					<p>
						Hanya dengan Rp. 149.000.00,- sudah bisa memulai bisnis, dapat sample produk plus sistemasinya!
					</p>
				</div>
				<div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
					<h3 class="mb-2">Contact</h3><br>
					<p><i class="fas fa-map-marker-alt"></i>  Komplek Pesona Darussalam, Jl. Bojong Gede Raya No.12, Waringin Jaya, Bojong Gede, Bogor</p><br>
					<p><i class="fas fa-phone"></i> Phone: 02187972989</p><br>
					<p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@dkids.co" style="font-size: 15px;"> info@dkids.co</a></p><br>
				</div>
				<div class="col-md-4 footer-links wow fadeInUp">
					<div class="row">
						<div class="col">
							<h3 class="ml-5">Links</h3><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<p><a href="index.html">Home</a></p><br>
							<p><a href="#product">Product</a></p><br>
						</div>
						<div class="col-md-6">
							<p><a href="#syarat">Syarat & Ketentuan</a></p><br>
							<p><a href="https://dkids.co/">Web store</a></p><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-top d-block d-md-block d-lg-none">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-about wow fadeInUp">
					<img class="logo-footer" src="assets-promo/images/logo-dkids2.png" alt="logo-footer" data-at2x="assets-promo/images/logo-dkids2.png">
					<p>
						Hanya dengan Rp. 149.000.00,- sudah bisa memulai bisnis, dapat sample produk plus sistemasinya!
					</p>
				</div>
				<div class="col-md-4 offset-md-1 footer-contact wow fadeInDown"><br>
					<h3 class="mb-2">Contact</h3>
					<p><i class="fas fa-map-marker-alt"></i>  Komplek Pesona Darussalam, Jl. Bojong Gede Raya No.12, Waringin Jaya, Bojong Gede, Bogor</p><br>
					<p><i class="fas fa-phone"></i> Phone: 02187972989</p><br>
					<p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@dkids.co" style="font-size: 15px;"> info@dkids.co</a></p><br>
				</div>
				<div class="col-md-4 footer-links wow fadeInUp">
					<div class="row">
						<div class="col">
							<h3>Links</h3><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p><a href="index.html">Home</a></p><br>
							<p><a href="#product">Product</a></p><br>
						</div>
						<div class="col-md-6">
							<p><a href="#syarat">Syarat & Ketentuan</a></p><br>
							<p><a href="https://dkids.co/">Web store</a></p><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				   <div class="col-md-6 footer-copyright text-center">
					 Copyright &copy; 2021 Powered by  <a href="">KATiB.id</a>
				</div>
				   <div class="col-md-6 footer-social mt-2 text-center">
					<a href="mailto:dkids.co@gmail.com"><i class="fas fa-envelope"></i></a> 
					<a href="https://www.facebook.com/dkids.co"><i class="fab fa-facebook-f"></i></a> 
					<a href="https://www.instagram.com/dkids.co/"><i class="fab fa-instagram"></i></a> 
					<a href="https://wa.me/6281387468433"><i class="fab fa-whatsapp"></i></a>
				</div>
			   </div>
		</div>
	</div>
</footer>

	
	
	<script src="assets-promo/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets-promo/vendor/animsition/js/animsition.min.js"></script>
	<script src="assets-promo/vendor/bootstrap/js/popper.js"></script>
	<script src="assets-promo/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets-promo/vendor/select2/select2.min.js"></script>
	<script src="assets-promo/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets-promo/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="assets-promo/vendor/slick/slick.min.js"></script>
	<script src="assets-promo/js/slick-custom.js"></script>
	<script src="assets-promo/vendor/parallax100/parallax100.js"></script>
	<script src="assets-promo/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script src="assets-promo/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="assets-promo/vendor/sweetalert/sweetalert.min.js"></script>
	<script src="assets-promo/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="assets-promo/js/main.js"></script>

</body>
</html>