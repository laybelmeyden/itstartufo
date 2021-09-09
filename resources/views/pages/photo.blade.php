@extends('layouts.master')

@section('content')

<section class="banner-area relative" id="home2">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Галерея
				</h1>
				<p class="text-white link-nav"><a href="/">Главная </a> <span class="lnr lnr-arrow-right"></span> <a href="/photo"> Галерея</a></p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<link rel="stylesheet" href="/assets/light/lightgallery.css">
				<div id="gallls">
					<div class="container">
						<div id="lightgallery">
							@foreach($result as $item)
							<a href="/assets/img/light/{{$item}}">
								<img src="/assets/img/light/{{$item}}" class="lazyload" data-sizes="auto" />
							</a>
							@endforeach
						</div>
					</div>
				</div>
				<script src="/assets/js/lazy.js" async=""></script>
				<script src="/assets/light/lightgallery.js"></script>
				<script src="/assets/light/lg-thumbnail.js"></script>
				<script src="/assets/light/lg-fullscreen.js"></script>
				<script>
					lightGallery(document.getElementById('lightgallery'));
				</script>
			</div>
		</div>
	</div>
</section>
@endsection