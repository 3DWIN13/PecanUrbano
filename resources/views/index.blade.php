<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pecan Urbano</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-color.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/logo.png">
	</head>
	
	<body>
		
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>Phone</strong>:&nbsp; <a href="#">555 555 555</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">PecanUrbano@pecan.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>



               
                           
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- logo area -->
							<a class="navbar-brand" href="#home">
								<!-- logo image -->
								<img class="img-responsive" src="img/logo/logo.png" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#latestalbum">Ultima Cancion</a></li>
							
								<li><a href="#portfolio">Videos Calientes</a></li>
								<li><a href="#events">Noticias</a></li>
								<li><a href="#team">Team</a></li>
								<li><a href="#contact">Contacto</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
			
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<!--<div class="item active">
							<img src="img/banner/b1.jpg" alt="...">
							<div class="container">
								
								<div class="carousel-caption slide-one">
									
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Melodi For You!</h2>
									
									<h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>
									
									<a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
								</div>
							</div>
						</div>-->
						<div class="item active">
							<img src="img/banner/b2.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					{{-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a> --}}
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Ultima cancion</h2>
						<hr>
						<!-- paragraph -->
						<p>Una cancion ahi <strong class="theme-color">vacana</strong> Lorem Ipsum has been the <strong class="theme-color">Music</strong>.</p>
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive" src="img/album/2.jpg" alt="" />
									<!-- disk image -->
									<img class="img-responsive disk" src="img/album/disk.png" alt="" />
								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4>Bajo Mundo</h4>
									<!-- composed by -->
									<h5>By Bulin 47 </h5>
									<!-- paragraph -->
									<p>Bulin 47 interpreta BAJO MUNDO, producido por Breyco, video grabado en Santo Domingo bajo la dirección de King Diove.</p>
									<!-- button -->
									<a href="#" class="btn btn-lg btn-theme" id="playNowBtn"><i class="fa fa-play"></i>&nbsp; Play Now</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--/ hero end -->
			
			<!-- promo -->
			
			<!--/ promo end -->
			
			<!-- featured abbum -->
			
			<!-- features end -->
			
			<!-- call to action -->
			
			<!--/ cta end -->
			
			<!-- work with us -->
			
			<!--/ end work with us -->
			
			<!-- news letter -->
			
			<!-- news letter end -->
			
			<div class="portfolio pad" id="portfolio">
				<div>
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Videos Calientes</h2>
					</div>
				</div>
				<!-- portfolio -->
				<div class="portfolio-content" id="portfolioOwl">
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/1.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/2.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/3.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/4.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/5.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/6.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/7.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/8.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
				</div>
	
				<!-- portfolio end -->
			</div>
			<!-- work with us end -->
			
			<!-- events -->
			<div class="events parallax-three pad" id="events">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading-shadow">
						<!-- heading -->
						<h2>Noticias Actuales</h2>
					</div>
					<!-- events element -->
					<div class="events-element">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											24 <span class="emonth">Jan</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">06:30 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> New York</span>
										<!-- image -->
										<img class="img-responsive" src="img/album/2.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Sound Of melodi In Instrumesnts</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											31 <span class="emonth">Jan</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">09:45 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> Romania</span>
										<!-- image -->
										<img class="img-responsive" src="img/album/2.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Rock Music Festival at City Life Mall</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											14 <span class="emonth">Feb</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">10:30 am</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> New Delhi</span>
										<!-- image -->
										<img class="img-responsive" src="img/album/2.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Fashion Show Light At Hollywood</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											31 <span class="emonth">Mar</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">10:00 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> New Delhi</span>
										<!-- image -->
										<img class="img-responsive" src="img/album/2.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Fashion Show Light At Hollywood</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- events end -->
			
			<!-- about -->
			
			<!-- about end -->
			
			<!-- meet -->
		
			<!-- meet end -->
			
			<!-- contact -->
			<div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Contacto</h2>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details">#30/67, 5th Street, Mega Market Circle, New Delhi - 625001</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">PecanUrbano@pecan.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">555 555 5555</span>
							</div>
						</div>
					</div>
					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Do you have any idea in your mind? Drop us a line.</p>
						<form role="form" id="contactForm" method="post">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"></textarea>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-theme">Send Message</button>
							</div>
						</form>
												
					</div>

				</div>
			</div>
			<!-- contact end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
						<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<!-- copy right -->
					<p class="copy-right">&copy; copyright 2018, All rights are reserved.</p>

                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
				</div>
			</footer>
			<!-- footer end -->
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- Include js plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- One Page Nav -->
		<script src="js/jquery.nav.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>