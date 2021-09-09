@extends('layouts.master')

@section('content')
<section class="banner-area relative" id="home2">	
	<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Новости				
					</h1>	
						<p class="text-white link-nav"><a href="/">Главная </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/news"> Новости</a></p>
				</div>	
			</div>
	</div>
</section>

<!-- Start blog Area -->
			<section class="blog-area section-gap">
				<div class="container">
					<div class="row">
						
						@foreach ($thenews as $thenew)
						<div class="col-lg-4 col-md-4 blog-left">
							<a href="/thenewsolo{{ $thenew->id }}">
							<div class="thumb img_overf" style="background-image: url(https://itfest2021.ru//storage/{{ $thenew->new_img }});">
								<!-- <img class="img-fluid" src="storage/{{ $thenew->new_img }}" alt=""> -->
							</div>
							<div class="detais">
								<ul class="tags">
								</ul>
								<h4>{{ $thenew->new_title }}</h4>
								<p class="date">{!! $thenew->new_date !!}</p>
							</div>
							</a>
						</div>
						@endforeach
						
					</div>
				</div>	
			</section>
@endsection