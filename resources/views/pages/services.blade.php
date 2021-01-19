@extends('welcome')

@section('content')

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->
	
	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				@foreach ($service as $elem)
					
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$elem->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$elem->titre}}</h2>
							<p>{{$elem->para}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			{{ $service->fragment('service')->links()}}
			@foreach ($presentation as $elem)
				
			<div class="text-center">
				<a href="#servicesprimé" class="site-btn">{{$elem->button}}</a>
			</div>
			@endforeach
			
		</div>
	</div>
	<!-- services section end -->


	<!-- features section service primé-->
	<div class="team-section spad" id="servicesprimé">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>GET IN THE LAB AND DISCOVER THE WORLD</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$serviceP[0]->titre}}</h2>
							<p>{{$serviceP[0]->para}}</p>
						</div>
						<div class="icon">
							<i class="{{$serviceP[0]->icon}}"></i>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$serviceP[1]->titre}}</h2>
							<p>{{$serviceP[1]->para}}</p>
						</div>
						<div class="icon">
							<i class="{{$serviceP[1]->icon}}"></i>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$serviceP[2]->titre}}</h2>
							<p>{{$serviceP[2]->para}}</p>
						</div>
						<div class="icon">
							<i class="{{$serviceP[2]->icon}}"></i>
						</div>
					</div>
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$serviceP[3]->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$serviceP[3]->titre}}</h2>
							<p>{{$serviceP[3]->para}}</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$serviceP[4]->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$serviceP[4]->titre}}</h2>
							<p>{{$serviceP[4]->para}}</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$serviceP[5]->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$serviceP[5]->titre}}</h2>
							<p>{{$serviceP[5]->para}}</p>
						</div>
					</div>
				</div>
			</div>
			@foreach ($presentation as $elem)
				
			<div class="text-center mt100">
				<a href="#blograpide" class="site-btn">{{$elem->button}}</a>
			</div>
			@endforeach
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad" id="blograpide">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				
				@foreach ($serviceP as $elem)
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-1.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>{{$elem->titre}}</h2>
							<p>{{$elem->para}}</p>
						</div>
					</div>
				</div>
				
				
				
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				@foreach ($info as $elem)
					
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$elem->titre1}}</h2>
					</div>
					<p>{{$elem->para}}</p>
					<h3 class="mt60">{{$elem->titre2}}</h3>
					<p class="con-item">{{$elem->adresse}}</p>
					<p class="con-item">{{$elem->phone}}</p>
					<p class="con-item">{{$elem->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="{{$elem->name}}">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="{{$elem->mail}}">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="{{$elem->subject}}">
								<textarea name="message" placeholder="{{$elem->message}}"></textarea>
								<button class="site-btn">{{$elem->button}}</button>
							</div>
						</div>
					</form>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Contact section end-->
@endsection
	