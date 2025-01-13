<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Font-family -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">

    <!-- Title of site -->
    <title>Hama group</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/logo/favicon.png') }}"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Linear icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">

    <!-- Flaticon icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Bootsnav -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">

    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">

            <!--Navigation bar included start -->
            @include('layouts.partials.navigationbar')
            <!--Navigation bar included ends -->

			<div class="container">
				<div class="welcome-hero-txt">
					<h2>Meet your technological innovation demands.</h2>
					<p>
                        Hama Group of Companies Ltd specializes in providing cutting-edge hardware and software solutions tailored to the unique needs of the East African market.
                    </p>
					<button class="welcome-btn scroll" onclick="window.location.href='#contact'">contact us</button>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="model-search-content">
							<div class="row">
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model">

										<div class="model-select">

                                            <h2 style="color: #055f50af">
                                                Vision
                                            </h2>

                                            <p style="text-align: justify;">
                                                To be the leading provider of innovative ICT solutions in Tanzania, driving digital transformation and empowering businesses and communities across the nation.
                                            </p>

										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model">

										<div class="model-select">


										</div><!-- /.model-select-icon -->
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model">

										<div class="model-select">


										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model">

										<div class="model-select">

										</div><!-- /.model-select-icon -->
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model">

										<div class="model-select">

                                            <h2 style="color: #055f50af">
                                                Mission
                                            </h2>

                                            <p style="text-align: justify;">
                                                To be the leading provider of innovative ICT solutions in Tanzania, driving digital transformation and empowering businesses and communities across the nation.
                                            </p>

										</div><!-- /.model-select-icon -->
									</div>
									<div class="single-model">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

        <!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--service start -->
		<section id="service" class="service">
			<div class="container">
				<div class="service-content">
                    <div class="section-header">
                        <p><small> Hama group of companies </small></p>
                        <h2>About Us</h2>
                    </div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="fa-solid fa-lightbulb" style="font-size: 50px;"></i>
								</div>
								<h2><a href="#">Innovation</a></h2>
								<p>
                                    We are committed to continuous innovation, leveraging the latest technologies to develop prod-
                                    ucts and solutions that meet the evolving needs of our clients.
                                </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="fa-solid fa-star" style="font-size: 50px;"></i>
								</div>
								<h2><a href="#">Quality</a></h2>
								<p>
                                    We maintain the highest standards of quality in everything we do, from the products we sell to
                                    the services we provide, ensuring the utmost satisfaction of our customers.
                                </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="fa-solid fa-handshake" style="font-size: 50px;"></i>
								</div>
								<h2><a href="#">Integrity</a></h2>
								<p>
                                    We conduct our business with honesty, transparency, and integrity, building trust and credibility
                                    with our clients, partners, and stakeholders.
                                </p>
							</div>
						</div>
					</div>

                    <div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="fa-solid fa-users" style="font-size: 50px;"></i>
								</div>
								<h2><a href="#">Customer<span> Focus</span></a></h2>
								<p>
                                    We are dedicated to understanding and exceeding our customers’ expectations, delivering
                                    personalized solutions and exceptional service to meet their unique requirements.
                                </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="fa-solid fa-project-diagram" style="font-size: 50px;"></i>
								</div>
								<h2><a href="#">Collaboration</a></h2>
								<p>
                                    We believe in the power of collaboration and teamwork, working closely with our clients, part-
                                    ners, and employees to achieve mutual success and drive positive outcomes.
                                </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="fa-solid fa-hand-holding-heart"" style="font-size: 50px;"></i>
								</div>
								<h2><a href="#">Community Impact</a></h2>
								<p>
                                    We are committed to making a positive impact on the communities we serve, through initiatives
                                    that promote education, empowerment, and sustainable development.
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

        <section id="beautiful-section" class="beautiful-section">
            <div class="container">
                <div class="section-header">
                    <h2 style="color: #fff">OUR SERVICES</h2>
                </div><!--/.section-header-->
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="new-cars-txt">
                            <h2><a href="#">Hardware and software solutions <span> </span></a></h2>
                            <p style="color: #fff; text-align: justify; ">
								Hama Group of Companies Ltd, based in Tanzania, specializes in providing ICT solutions, including hardware and software sales, to businesses across industries. They are a trusted partner for technology solutions that enhance efficiency, productivity, and innovation.
							</p>
							<h5><a href="#">Hardware Solutions <span> </span></a></h5>
                            <p style="color: #fff; text-align: justify; ">
								Hama Group of Companies Ltd offers high-quality hardware solutions, including computers, laptops, servers, and networking equipment, tailored to clients' needs. They partner with leading global brands to ensure reliability and budget-friendly options.
							</p>
							<h5><a href="#">Software Solutions <span> </span></a></h5>
                            <p style="color: #fff; text-align: justify; ">
								Hama Group of Companies Ltd provides a wide range of software solutions, including operating systems, security tools, and custom software development. Their expert team delivers tailored solutions to meet clients' unique business needs and drive success.
							</p>
                        </div><!--/.new-cars-txt-->
                    </div><!--/.col-->
                    <div class="col-md-6 image-container">
                        <img src="assets/images/new-cars-model/beautiful-img.png" alt="Beautiful Design" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>



		<!--new-cars start -->
		<section id="new-cars" class="new-cars">
			<div class="container">
				<div class="section-header">
					<p>checkout <span>the</span> latest cars</p>
					<h2>newest cars</h2>
				</div><!--/.section-header-->
				<div class="new-cars-content">
					<div class="owl-carousel owl-theme" id="new-cars-carousel">
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/stationary.jpg" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">Graphic Design <span></span></a></h2>
											<p style="text-align: justify;">
                                                Hama focuses on delivering innovative, visually captivating design solutions to businesses, organizations, and individuals. We are committed to creativity, and excellence, aiming to elevate brands and create impactful experiences.
                                            </p>
                                            <br>
                                            <h7 style="color: #067260af; font-weight: bold">Brand Identity Design</h7>
											<p class="new-cars-para2" style="text-align: justify;">
                                                Logos, brand guidelines, and visual identities for a strong brand image.                                            </p>
                                            <button class="welcome-btn new-cars-btn scroll"><a href="#featured-cars" style="color: #fff">More services</a>
											</button>
										</div><!--/.new-cars-txt-->
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/pc-table.jpg" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h7 style="color: #067260af; font-weight: bold">Brand Identity Design</h7>
											<p>
                                                We design brochures, flyers, business cards, posters, and other printed materials to communicate key messages and engage audiences.
                                            </p>
                                            <br>
											<h7 style="color: #067260af; font-weight: bold">Digital Design</h7>
											<p>
                                                Website designs, social media graphics, email templates, and digital ads to enhance online presence and user experience.
                                            </p>

											<h7 style="color: #067260af; font-weight: bold">Packaging Design</h7>
											<p>
                                                Innovative packaging solutions and custom illustrations to enhance product appeal and project visuals.
                                            </p>

											<h7 style="color: #067260af; font-weight: bold">Motion Graphics</h7>
											<p>
                                                Animations, explainer videos, and multimedia presentations to simplify ideas and engage viewers.                                            </p>
										</div><!--/.new-cars-txt-->
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/printing.jpg" alt="img"/>
										</div><!--/.new-cars-img-->
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">ferrari 488 superfast</a></h2>
											<p>
												Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
											<p class="new-cars-para2">
												Sed ut pers unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
											</p>
											<button class="welcome-btn new-cars-btn scroll" style="color: #fff"><a href="#featured-cars" style="color: #fff">More services</a>
											</button>
										</div><!--/.new-cars-txt-->
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.single-new-cars-item-->
						</div><!--/.new-cars-item-->
					</div><!--/#new-cars-carousel-->
				</div><!--/.new-cars-content-->
			</div><!--/.container-->
 s
		</section><!--/.new-cars-->
		<!--new-cars end -->

		<!--featured-cars start -->
		<section id="featured-cars" class="featured-cars">
			<div class="container">
				<div class="section-header">
					<h2>Printing Services</h2>
				</div><!--/.section-header-->
				<div class="featured-cars-content">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box-">
									<div class="featured-cars-img-">
										<img src="assets/images/featured-cars/print-2.jpg" alt="cars">
									</div>
									<div class="featured-model-info">

									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a>Offset Printing</a></h2>

									<p style="color: #fff">
                                        High-volume printing services for brochures, flyers, business cards, catalogs, and other marketing materials.
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box-">
									<div class="featured-cars-img-">
										<img src="assets/images/featured-cars/print-1.jpg" alt="cars">
									</div>
									<div class="featured-model-info">

									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a>Digital Printing<span></span></a></h2>

									<p style="color: #fff">
                                        Fast-turnaround printing for short-run projects, personalized products, and variable data printing.
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box-">
									<div class="featured-cars-img-">
										<img src="assets/images/featured-cars/print-7.jpg" alt="cars">
									</div>
									<div class="featured-model-info">

									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a>Large Format Printing <span></span></a></h2>

									<p style="color: #fff">
                                        Wide-format printing for banners, posters, signs, and trade show displays.
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box-">
									<div class="featured-cars-img-">
										<img src="assets/images/featured-cars/print-5.jpg" alt="cars">
									</div>
									<div class="featured-model-info">

									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a>Custom Printing <span> </span> </a></h2>

									<p style="color: #fff">
                                        Specialized printing services for unique projects, including packaging, labels, and promotional items.
                                    </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.featured-cars-->
		<!--featured-cars end -->

		<!-- clients-say strat -->
		<section id="our-customers"  class="clients-say">
			<div class="container">
				<div class="section-header">
					<h2>Our Customers</h2>
				</div><!--/.section-header-->
				<div class="row">
					<div class="owl-carousel testimonial-carousel">
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/brand/nmb.png" alt="brand-image" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">National Microfinance Bank</a></h2>
										<h4>(plc)</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/brand/dit.png" alt="brand-image" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">

									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">Dar es salaa institute of Technology</a></h2>
										<h4>DIT</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/brand/nit.png" alt="brand-image" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">

									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">National Institute of Transportation</a></h2>
										<h4>(NIT)</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
                        <div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/brand/tpa.png" alt="brand-image" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">

									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">Tanzania Ports Authority</a></h2>
										<h4>(TPA)</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
                        <div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/brand/bureau.png" alt="brand-image" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">

									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">National Bureau of Statistics</a></h2>
										<h4>(NBS)</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
					</div><!--/.testimonial-carousel-->
				</div><!--/.row-->
			</div><!--/.container-->

		</section><!--/.clients-say-->
		<!-- clients-say end -->

		<!--brand strat -->
		<section id="our-brands"  class="brand">
            <div class="section-header">
                <h5>Proudly collaborating with global brands</h5>
                <br>
                <br>
            </div><!--/.section-header-->
			<div class="container">

				<div class="brand-area">
					<div class="owl-carousel owl-theme brand-item">
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/samsung.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/xerox.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/dell.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/kyocera.png" alt="brand-image" />
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#">
								<img src="assets/images/brand/lg.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->
				</div><!--/.clients-area-->

			</div><!--/.container-->

            <div class="container">

				<div class="brand-area">
					<div class="owl-carousel owl-theme brand-item">
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/apple.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/hp.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/lenovo.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/brand/acer.png" alt="brand-image" />
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#">
								<img src="assets/images/brand/sanyo.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->
				</div><!--/.clients-area-->

			</div><!--/.container-->

		</section><!--/brand-->
		<!--brand end -->

		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->


        @include('layouts.partials.footer')


		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>

    </body>

</html>
