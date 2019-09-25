@extends('layouts.master')

@section('content')

<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Контакты				
					</h1>	
						<p class="text-white link-nav"><a href="/">Главная </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/contact"> Контакты</a></p>
				</div>	
			</div>
	</div>
</section>
<section>
	<div class="container">
	<div class="row">
		<div class="col-md-4 mt-sm-30 con">
		<h3 class="mb-20">E-mail</h3>
			<div class="">
				<ul class="unordered-list">
					<li>info@rusinnovations.com</li>
			</div>
		</div>
		<div class="col-md-4 mt-sm-30 con">
		<h3 class="mb-20">Контактное лицо в Москве:</h3>
			<div class="">
				<ul class="unordered-list">
					<li>Сергеев Никита (директор проектного офиса АНО «АИР») <br>
					+7 (925) 493 18 66, <br>
					info@rusinnovations.com </li>
			</div>
		</div>
		<div class="col-md-4 mt-sm-30 con">
		<h3 class="mb-20">Контактное лицо в Ульяновске:</h3>
			<div class="">
				<ul class="unordered-list">
					<li>Любовь Федорова <br>
					8(964)855-55-50</li>
			</div>
		</div>
	</div>
	</div>
</section>

@endsection