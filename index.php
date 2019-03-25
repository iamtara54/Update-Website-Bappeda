<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="shortcut icon" href="http://produksi.jmc.co.id/prototipe/2018/dataku_diy/static/images/logo-client.png">
	<title>Bappeda Daerah Istimewa Yogyakarta</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	
	<!-- Select2 -->
	<link rel="stylesheet" type="text/css" href="plugin/select2/src/assets/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="plugin/select2/src/assets/css/select2-addl.min.css">
	<link rel="stylesheet" type="text/css" href="plugin/select2/src/assets/css/select2-krajee.min.css">

	<!-- File Input -->
	<!-- <link rel="stylesheet" type="text/css" href="plugin/fileinput/css/fileinput.min.css"> -->

	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="plugin/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="plugin/slick/slick-theme.css">
	
	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/layout.css" />
	<link type="text/css" rel="stylesheet" href="css/responsive.css" />
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>
	<!-- Header -->
	<!-- <header id="home"> -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="?page=egov">E-Gov</a></li>
					<li><a href="?page=berita">Berita</a></li>
					<li><a href="?page=info">Info Publik</a></li>
					<li><a href="?page=download">Download</a></li>
					<li><a href="?page=jfp">JFP Corner</a></li>
					<!-- <li><a href="#team">IKD</a></li>
					<li class="has-dropdown"><a href="#blog">Peta</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">Peta Tematik</a></li>
							<li><a href="blog-single.html">Peta Sebaran</a></li>
						</ul>
					</li> -->
					<li><a href="kontak.php">Kontak Kami</a></li>
					<nav class="main-nav nav navbar-nav menus" style="display: none;">
						<li>
							<a href="?page=tntangbappeda" title="Tentang">Tentang Bappeda</a>
						</li>
						<li>
							<a href="?page=litbang" title="Litbang">Litbang Corner</a>
						</li>
						<li>
							<a href="?page=artikel" title="Artikel">Artikel</a>
						</li>
						<li>
							<a href="?page=media" title="Galeri Bappeda">Media</a>
						</li>
						<li>
							<a href="?page=dsperencanaan" title="Dashboard">Dashboard Perencanaan</a>
						</li>
					</nav>
					<a id="menu-toggle" href="#" class="btn btn-white btn-lg toggle"><i class="fa fa-bars"></i></a>
					<nav id="sidebar-wrapper">
						<ul class="sidebar-nav">
							<!-- <a id="menu-close" href="#" class="btn btn-danger pull-right hidden-md hidden-lg toggle"><i class="fa fa-times"></i></a> -->
							<li>
								<a href="?page=tntangbappeda" title="Tentang">Tentang Bappeda</a>
							</li>
							<li>
								<a href="?page=litbang" title="Litbang">Litbang Corner</a>
							</li>
							<li>
								<a href="?page=artikel" title="Artikel">Artikel</a>
							</li>
							<li>
								<a href="?page=media" title="Galeri Bappeda">Media</a>
							</li>
							<li>
								<a href="?page=dsperencanaan" title="Dashboard">Dashboard Perencanaan</a>
							</li>
						</ul>
					</nav>
				</ul>
				<ul class="navbar-right">
					<!-- <li class="pull-right"><button class="main-btn">Login</button></li> -->
					<!-- Navigation -->
					
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- <hr> -->

	<!-- </header> -->
	<!-- /Header -->

	<?php if(!isset($_GET['page'])) $_GET['page']=0;?>
    <?php
        if ($_GET['page']) {
            require_once 'pages/'.$_GET['page'] . '.php';
        } else {
            require_once 'pages/home.php';
        }
    ?>

	<!-- Contact -->
	<div id="contact" class="section md-padding bg-dark" style="padding-bottom: 150px;">

		<!-- Container -->
		<div class="container kontener">

			<!-- Row -->
			<div class="row">

				<!-- contact -->
				<div class="col-sm-6" id="maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d988.2362984028001!2d110.36537374001969!3d-7.795627759917586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0111d680b9bb72c!2sBAPPEDA+DIY!5e0!3m2!1sid!2sus!4v1553329598730" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-6" id="contact-form" data-sr="move 100px opacity 0.5">
					<h2>Kontak Kami</h2>
					<p>
	                    <i class="fa fa-building fa-fw"></i> Kompleks Kepatihan, Danurejan, Yogyakarta<br>
	                	<i class="fa fa-phone fa-fw"></i> (0274)589583,  (0274)557418<br>
	                    <i class="fa fa-info fa-fw"></i> (0274)562811<br>
	                    <i class="fa fa-fax fa-fw"></i> (0274)586712<br>
	                    <i class="fa fa-globe fa-fw"></i> <a href="http://bappeda.jogjaprov.go.id"> http://bappeda.jogjaprov.go.id</a><br>
	                    <i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:bappeda@jogjaprov.go.id "> bappeda@jogjaprov.go.id</a>
                    </p>
                    <br>
					<form id="myform" action="/kontak/create?back_controller=site" method="post" enctype="multipart/form-data">
						<input type="hidden" name="frontend-csrf" value="LXRDazJaUndpGnNGSGkHDx0nKgJeAycuTEQkOWEsagJyRBkyRjsENA==">					<div class="row">
						<div class="col-sm-6">
							<div class="form-group field-kontak-nama required">
								<input type="text" id="kontak-nama" class="form-control" name="Kontak[nama]" maxlength="50" placeholder="Nama">
								<div class="help-block"></div>
							</div>						</div>
							<div class="col-sm-6">
								<div class="form-group field-kontak-email required">
									<input type="text" id="kontak-email" class="form-control" name="Kontak[email]" maxlength="100" placeholder="Email">
									<div class="help-block"></div>
								</div>						</div>
							</div>
							<div class="form-group field-kontak-pesan required">
								<textarea id="kontak-pesan" class="form-control" name="Kontak[pesan]" placeholder="Isi Pesan"></textarea>
								<div class="help-block"></div>
							</div>					<div class="form-group field-kontak-verifycode required">
							<div class="row">
								<div class="col-xs-6"><input type="text" id="kontak-verifycode" class="form-control" name="Kontak[verifyCode]" placeholder="Masukkan kode captcha"></div>
								<div class="col-xs-3" style="padding-left:0px;"><img id="kontak-verifycode-image" src="http://bappeda.jogjaprov.go.id/site/captcha?v=5c877a9cec1a4" alt="" style="border-radius:3px;max-width:100%;"></div>
								<div class="col-xs-3" style="padding-left:0;">
									<a href="#" id="fox" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Recaptcha</a>
								</div>
							</div>
							<div class="help-block"></div>
						</div>					<div class="form-group">
						<button type="submit" class="btn btn-danger"><i class="fa fa-send"></i> KIRIM</button>
					</div>
					</form>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<!-- <div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>1739 Bubby Drive</p>
					</div>
				</div> -->
				<!-- /contact -->

				<!-- contact form -->
				<!-- <div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div> -->
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

	<!-- Counter -->
	<div id="counter">
		<div class="box">
			<h4>TOTAL PENGUNJUNG</h4>
			<h1>4587349</h1>
			<a href="#">Selengkapnya</a>
		</div>
	</div>
	<!-- /Counter -->


	<!-- Footer -->
	<footer id="footer" class="xs-padding bg-red">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<!-- <div class="footer-logo">
						<a href="index.html"><img src="img/logo-alt.png" alt="logo"></a>
					</div> -->
					<!-- /footer logo -->

					<!-- footer follow -->
					<!-- <ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul> -->
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>COPYRIGHT © 2019 BAPPEDA DAERAH ISTIMEWA YOGYAKARTA. All Rights Reserved. <br> Powered by <a href="#" target="_blank">JMC IT Consultant</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="plugin/select2/src/assets/js/select2.full.min.js"></script>
	<script type="text/javascript" src="plugin/select2/src/assets/js/select2-krajee.min.js"></script>
	<!-- <script type="text/javascript" src="plugin/fileinput/js/fileinput.min.js"></script> -->
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	
<script>

$(document).ready(function()
{
	
	// Closes the sidebar menu on menu-close button click event
	$("#menu-close").click(function(e)							//declare the element event ...'(e)' = event (shorthand)
	{
																// - will not work otherwise")
		$("#sidebar-wrapper").toggleClass("active");			//instead on click event toggle active CSS element
		e.preventDefault(); 									//prevent the default action ("Do not remove as the code
		
		/*!
		======================= Notes ===============================
		* see: .sidebar-wrapper.active in: style.css
		==================== END Notes ==============================
		*/
	});															//Close 'function()'

	// Open the Sidebar-wrapper on Hover
	$("#menu-toggle").hover(function(e)							//declare the element event ...'(e)' = event (shorthand)
	{
		$("#sidebar-wrapper").toggleClass("active",true);		//instead on click event toggle active CSS element
		e.preventDefault();										//prevent the default action ("Do not remove as the code
	});

	$("#menu-toggle").bind('click',function(e)					//declare the element event ...'(e)' = event (shorthand)
	{
		$("#sidebar-wrapper").toggleClass("active",true);		//instead on click event toggle active CSS element
		e.preventDefault();										//prevent the default action ("Do not remove as the code
	});															//Close 'function()'

	$('#sidebar-wrapper').mouseleave(function(e)				//declare the jQuery: mouseleave() event 
																// - see: ('//api.jquery.com/mouseleave/' for details)
	{
		/*! .toggleClass( className, state ) */
		$('#sidebar-wrapper').toggleClass('active',false);		/* toggleClass: Add or remove one or more classes from each element
																in the set of matched elements, depending on either the class's
																presence or the value of the state argument */
		e.stopPropagation();									//Prevents the event from bubbling up the DOM tree
																// - see: ('//api.jquery.com/event.stopPropagation/' for details)
																
		e.preventDefault();										// Prevent the default action of the event will not be triggered
																// - see: ('//api.jquery.com/event.preventDefault/' for details)
	});
});

</script>

</body>

</html>
