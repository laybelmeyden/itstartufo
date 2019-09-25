@extends('layouts.master')

@section('content')
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						{{ $solo->new_title }}				
					</h1>	
				</div>	
			</div>
	</div>
</section>
	<section class="blog-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 blog-left">
					<div class="thumb">
						<img class="img-fluid" src="storage/{{ $solo->new_img }}" alt="">
					</div>
				</div>
				<div class="col-lg-8 col-md-12 blog-left">
					<div class="thumb">
					    <p>{{ $solo -> new_date }}</p>
                        <p>{!! $solo -> new_body !!}</p>
					</div>
				</div>
			</div>
		</div>	
	</section>

@endsection
