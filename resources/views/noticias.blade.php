<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Noticias</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="../css/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/themify-icons.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/slicknav.css">
	<link rel="stylesheet" href="../css/style.css">
	<!-- <link rel="stylesheet" href="../css/responsive.css"> -->
</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
 <!-- header-->
 <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.html">
                                    <!-- <img src="../img/logo.png" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="../">Inicio</a></li>
                                        <li><a class="active"  href="../noticias">Noticias</a></li>
                                        <li><a href="../verInvitacion/1">Invitacion</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!--/ header-->

<!-- bradcam_area  -->
<div class="bradcam_area text-center overlay3" style="background-image: url('../img/noticias.jpg');">
	<div class="bradcam_text">
		<h3>Noticias</h3>
	</div>
</div>
<!--/ bradcam_area  -->

<!-- Start Align Area -->

<?php
                        $url = "https://api.nytimes.com/svc/topstories/v2/arts.json?api-key=QcIfqTH4BfZ8AhE9c3PqYeNe5evlSlaf";
                        $data = json_decode(file_get_contents($url));
						// echo $data-> results[0]->title;
						// echo $data-> results[0]->abstract;
						// echo $data-> results[0]->multimedia[0]->url;
                        ?>

	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3 class="mb-30"><?php echo $data-> results[0]->title;?></h3>
				<div class="row">
					<div class="col-md-3">
						<img src="<?php echo  $data-> results[0]->multimedia[0]->url;?>" alt="" class="img-fluid">
					</div>
					
					<div class="col-md-9 mt-sm-20">
						<p><?php echo $data-> results[0]->abstract;?></p>
					</div>
				</div>
			</div>
			<div class="section-top-border text-right">
				<h3 class="mb-30"><?php echo $data-> results[1]->title;?></h3>
				<div class="row">
					<div class="col-md-9">
						<p class="text-right"><?php echo $data-> results[1]->abstract;?></p>
					</div>
					<div class="col-md-3">
						<img src="<?php echo  $data-> results[1]->multimedia[0]->url;?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

    <!-- footer_start -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end -->

	<!-- JS here -->
	<script src="../js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="../js/vendor/jquery-1.12.4.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/isotope.pkgd.min.js"></script>
	<script src="../js/ajax-form.js"></script>
	<script src="../js/waypoints.min.js"></script>
	<script src="../js/jquery.counterup.min.js"></script>
	<script src="../js/imagesloaded.pkgd.min.js"></script>
	<script src="../js/scrollIt.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/nice-select.min.js"></script>
	<script src="../js/jquery.slicknav.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/plugins.js"></script>

	<!--contact js-->
	<script src="../js/contact.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/jquery.form.js"></script>
	<script src="../js/jquery.validate.min.js"></script>
	<script src="../js/mail-script.js"></script>

	<script src="../js/main.js"></script>

	

</body>