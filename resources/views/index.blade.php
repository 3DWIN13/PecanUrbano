@extends('layouts.layout')

@section('content')

<div class="banner">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
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
	</div>
</div>
<!--/ banner end -->

<!-- LOGIN -->
<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">LOGIN &nbsp; <small><span
							class="label label-success">Available</span> &nbsp; <span
							class="label label-danger">Not Available</span></small></h4>
			</div>
			<!-- form for events ticket booking -->
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1">EMAIL</label>
						<input id="email" type="email"
							class="form-control @error('email') is-invalid @enderror" name="email"
							value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="exampleInputContact">PASSWORD</label>
						<input id="password" type="password"
							class="form-control @error('password') is-invalid @enderror"
							name="password" required autocomplete="current-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					@if (Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}">
						{{ __('Forgot Your Password?') }}
					</a>
					@endif
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default"
						data-dismiss="modal">CERRAR</button>
					<!-- link to payment gatway here -->
					<button type="submit" class="btn btn-primary">ENTRAR</button>
				</div>
			</form>
		</div>
	</div>
</div>

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
			<p>Una cancion ahi <strong class="theme-color">vacana</strong> Lorem Ipsum has been the <strong
					class="theme-color">Music</strong>.</p>
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
						<p>Bulin 47 interpreta BAJO MUNDO, producido por Breyco, video grabado en Santo Domingo bajo la
							dirección de King Diove.</p>
						<!-- button -->
						<a href="#" class="btn btn-lg btn-theme" id="playNowBtn"><i class="fa fa-play"></i>&nbsp;
							Play Now
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

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
				<h3>Album Title</h3>
				<hr>
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
				<h3>Album Title</h3>
				<hr>
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
				<h3>Album Title</h3>
				<hr>
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
				<h3>Album Title</h3>
				<hr>
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
				<h3>Album Title</h3>
				<hr>
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
				<h3>Album Title</h3>
				<hr>
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
				<h3>Album Title</h3>
				<hr>
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
				<h3>Album Title</h3>
				<hr>
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
								<span class="emonth">1/1/2021</span>
								{{-- <div class="clearfix"></div>
								<!-- time -->
								<span class="etime">06:30 pm</span> --}}
							</div>
							<!-- event location -->
							{{-- <span class="event-location"><i class="fa fa-map-marker"></i> </span> --}}
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
							<h3>Nuevo tema de fulano</h3>
							<!-- horizontal line -->
							<hr />
							<!-- paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna
								aliqua...
								{{-- <a href="#">more</a> --}}
							</p>
							<!-- buy ticket button link -->
							<a href="/noticias/titulo-de-la-noticia" class="btn btn-lg btn-theme">
								Leer mas
							</a>
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
							<!-- horizontal line -->
							<hr />
							<!-- paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna
								aliqua... <a href="#">more</a></p>
							<!-- buy ticket button link -->
							<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal">Book
								Ticket</button>
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
							<!-- horizontal line -->
							<hr />
							<!-- paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna
								aliqua... <a href="#">more</a></p>
							<!-- buy ticket button link -->
							<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal">Book
								Ticket</button>
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
							<!-- horizontal line -->
							<hr />
							<!-- paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna
								aliqua... <a href="#">more</a></p>
							<!-- buy ticket button link -->
							<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal">Book
								Ticket</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- events end -->

<!-- contact -->
<div class="contact pad" id="contact">
	<div class="container">
		<!-- default heading -->
		<div class="default-heading">
			<!-- heading -->
			<h2>Contact Us</h2>
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
					<span class="contact-details">music.site@melodi.com</span>
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

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

@endsection 