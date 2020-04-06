@extends('layouts.app')
@section('content')
	<div class="home d-flex flex-column align-items-start justify-content-end">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Services</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_subtitle">This is Dr Pro</div>
						<div class="section_title"><h2>Our Services</h2></div>
					</div>
				</div>
			</div>
			<div class="row services_row" id="app">
                    <gde-user></gde-user>
            </div>
		</div>
	</div>
    <script src="{{asset('js/app.js')}}"></script>
@endsection
