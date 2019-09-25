@extends('layouts.master')

@section('content')

<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-6 col-md-6">
							<h1 class="head_h1">
								Всероссийская программа поддержки научно-технического творчества молодежи в сфере информационных технологий			
							</h1>
							<p class="text-white text-uppercase">
								Познакомьтесь с нашей деятельностью поближе
							</p>
							<a href="/about" class="primary-btn header-btn text-uppercase">Подробнее</a>
						</div>
						<div class="banner-img col-lg-6 col-md-6">
							<img class="img-fluid" src="assets/img/banner-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start products Area -->
			<section class="products-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Наши спикеры</h1>
						</div>
					</div>							
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="">
									<img src="assets/gal/335.png" alt="" class="img-fluid">
								</div>
								<div class="details">
									<h4>Андрей Поскряков</h4>
									<p>
										Специалист по клиентоориентированности
									</p>
								</div>
							</div>
						</div>	
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="">
									<img src="assets/gal/336.png" alt="" class="img-fluid">
								</div>
								<div class="details">
									<h4>Станислав Сахаров</h4>
									<p>
										Руководитель программы IT-Start
									</p>
								</div>
							</div>
						</div>	
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="">
									<img src="assets/gal/337.png" alt="" class="img-fluid">
								</div>
								<div class="details">
									<h4>Сергеев Никита</h4>
									<p>
										Директор проектного офиса АНО "АИР"
									</p>
								</div>
							</div>
						</div>	
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="">
									<img src="assets/gal/338.png" alt="" class="img-fluid">
								</div>
								<div class="details">
									<h4>Матвей Бебенин</h4>
									<p>
										Руководитель бэк-энд разработки в креативном агентстве SVMD
									</p>
								</div>
							</div>
						</div>																								
					</div>
				</div>	
			</section>
			<!-- End products Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left no-padding">
							<img class="mx-auto d-block img-fluid" src="assets/img/about-img.png" alt="">
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>Есть вопросы ?</h1>
							<h5>
								Напиши нам !
							</h5>
							<a class="primary-btn text-uppercase btn_cont" href="/contact">НАПИСАТЬ</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start feature Area -->
			<section class="feature-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10 text-white">Наша документация</h1>
							<p class="text-white">
								Перед участием ознакомься с положением !
							</p>
							<a class="primary-btn text-uppercase" href="/infos">ОЗНАКОМИТЬСЯ</a>
						</div>
					</div>							
				</div>	
			</section>
			<!-- End feature Area -->
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Последниее новости</h1>
							<p>
								Самые свежие новости о старте !
							</p>
						</div>
					</div>						
					<div class="row">
						
						@foreach ($thenews as $thenew)
						<div class="col-lg-4 col-md-4 blog-left">
							<a href="/thenewsolo{{ $thenew->id }}">
							<div class="thumb">
								<img class="img-fluid" src="storage/{{ $thenew->new_img }}" alt="">
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
