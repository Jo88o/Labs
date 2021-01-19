@extends('welcome')

@section('content')

<!-- Page header -->
<div class="page-top-section">
	<div class="overlay"></div>
	<div class="container text-right">
		<div class="page-info">
			<h2>Contact</h2>
			<div class="page-links">
				<a href="#">Home</a>
				<span>Contact</span>
			</div>
		</div>
	</div>
</div>
<!-- Page header end -->

	<!-- Google map -->

	<div>
		@foreach ($contact as $elem)
			
		<iframe width="100%" src="{{$elem->map}}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		@endforeach
	</div>
	


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
								<input type="text" name="email" placeholder="{{$elem->email}}">
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
