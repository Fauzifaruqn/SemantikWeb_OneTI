<!DOCTYPE html>
<html lang="en">
<head>
<title>One-TI</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Major - 5* Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo base_url();?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="<?php echo base_url();?>/assets/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#">
								<img src="<?php echo base_url();?>/assets/images/logo.png" width="90px;" alt="logo">
							</a>
						</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="<?php echo base_url();?>index.php/Welcome/index">Home</a></li>
								<li><a href="<?php echo base_url();?>index.php/Welcome/fetchData">Smartphone</a></li>
								<!-- <li><a href="<?php echo base_url();?>index.php/Welcome/testCreen">Test Page</a></li>	 -->
								<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandSamsung">Samsung</a></li>
								<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandAsus">Asus</a></li>
								<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandXiaomi">Xiaomi</a></li>
								<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandGoogle">Google</a></li>
								<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandOnePlus">OnePlus</a></li>
							</ul>
							</ul>
						</nav>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(<?php echo base_url();?>/assets/images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li class="active"><a href="<?php echo base_url();?>index.php/Welcome/index">Home</a></li>
				<li><a href="<?php echo base_url();?>index.php/Welcome/fetchData">Smartphone</a></li>
				<!-- <li><a href="<?php echo base_url();?>index.php/Welcome/testCreen">Test Page</a></li>	 -->
				<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandSamsung">Samsung</a></li>
				<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandAsus">Asus</a></li>
				<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandXiaomi">Xiaomi</a></li>
				<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandGoogle">Google</a></li>
				<li><a href="<?php echo base_url();?>index.php/Welcome/filterBrandOnePlus">OnePlus</a></li>
			</ul>
			<div class="menu_review"><a href="#">Book Now</a></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>/assets/images/3758.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>One-T.I.</h1></div>
							<div class="home_text">Wanti - wanti dulu yuk</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search Box -->

	<div class="search_box">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_box_container d-flex flex-row align-items-center justify-content-start">
						<div class="search_form_container">
						
							<form action="<?php echo base_url();?>index.php/Welcome/range" method="POST" id="search_form" class="search_form">
								<div class="d-flex flex-lg-row flex-column align-items-center justify-content-start">
									<ul class="search_form_list d-flex flex-row align-items-center justify-content-start flex-wrap">
										
                    <input class="form-control form-control-lg" name="budget" type="number" placeholder="Budget (IDR)" >
                    <small id="budgetHelp" class="form-text text-muted"><a style="color:#fff;">Enter your budget in IDR, eg: 3000000</a></small>
									</ul>
									<button class="search_button" type="submit" style="margin-left:50px;">search</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h1>One-T.I. - Wanti - Wanti Dulu Yuk</h1></div>
						<div class="section_text">Flatform terbaik dalam memberikan ulasan dan spesifikasi Smartphone</div>
					</div>
				</div>
			</div>
			<div class="row intro_row">
				
				<!-- Intro Image -->
				<div class="col-lg-6">
					<center>
					<div class="intro_image"><img src="<?php echo base_url();?>/assets/images/lup.png" alt="https://unsplash.com/@papao03" style ="width:56%;"></div>
					</center>
				
				</div>

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="quote"><img src="<?php echo base_url();?>/assets/images/quote.png" alt="quotes"></div>
						<div class="intro_text">
							<p>Menurut saya One.TI. telah banyak membantu saya dalam melakukan pencarian HP, dengan memasukan budget langsung muncul apa yang saya harapkan.Terimakasih One TI</p>
						</div>
						<div class="intro_author d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><img src="<?php echo base_url();?>/assets/images/author_1.jpg" alt="https://unsplash.com/@onurozkardes"></div>
							<div class="intro_author_content">
								<div class="intro_author_name">Michael Williams</div>
								<div class="intro_author_title">client</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- Services -->
	 <h3 style ="text-align:center">Our Team</h3>
	 <br><br>
	 <section id="services" class="services grey lighten-3 scrollspy" style="text-align:center ;margin-bottom:50px">
        <div class="container">
            <div class="row">
                
                <div class="col m4 s12">
                    <div class="card-panel center">
					<img src="<?php echo base_url();?>/assets/images/rai.jpg" alt="raihan" width="130px" style="margin-bottom:30px">
                        <h5>Muhammad Raihan Akbar</h5>
                        <p>Backend Developer
                        </p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <img src="<?php echo base_url();?>/assets/images/fauzi.jpg" alt="fauzi" width="130px" style="margin-bottom:30px">
                        <h5>Fauzi Faruq Nabbani</h5>
                        <p>Frontend Developer
                        </p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
					<img src="<?php echo base_url();?>/assets/images/rifky.jpg" alt="rifqy" width="130px" style="margin-bottom:30px">
                        <h5>M. Rifqy Aulia Akbar</h5>
                        <p>Data Manager
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-md-row flex-column align-items-center align-items-start justify-content-start">
						<div class="footer_logo">
							<div class="logo">
								<a href="#">
								<img src="<?php echo base_url();?>/assets/images/logo.png" width="90px;" alt="logo">
								</a>
							</div>
						</div>
					</div>
					<div style="text-align:center; margin-bottom:0px; text-color:white ">
						<p style="margin-bottom:0px">Developed by One-TI Team</p>
						<p>Copyright ©2019 One-TI Team</p>
					</div>
					
					<br>
				</div>
			</div>
		</div>
	</footer>


</div>

<script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?php echo base_url();?>/assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/progressbar/progressbar.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url();?>/assets/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
</body>
</html>