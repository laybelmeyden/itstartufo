@extends('layouts.master')

@section('content')

<!-- start banner Area -->
<section id="home">
	<div class="left_img"></div>
	<div class="banner-content">
		<h1 class="head_h1">
			Окружной фестиваль <br> интерактивных технологий <br> «Шаг в будущее»
		</h1>
		<!-- <span class="head_h1_span">«Окружная школа цифровых технологий «Digital Lab»»</span>	 -->
		<a data-toggle="modal" data-target="#exampleModal" class="primary-btn header-btn text-uppercase">УЧАСТВОВАТЬ</a>
		<p class="p_eclips">22 - 24 октября г. Майкоп</p>
	</div>
	<div class="">
		<img class="img_area" src="assets/img/Group24right.png" alt="">
	</div>
	<div class="eclps">
		<p class="main_nav_text">
			22 - 24 октября <br> г. Майкоп
		</p>
		<img class="img_area_two" src="assets/img/Ellipse3.png" alt="">
	</div>
</section>
<!-- End banner Area -->
<!-- Start home-about Area -->
<section class="home-about-area-1">
	<div class="grey_back">
		<!-- <p class="about_text">
					Данный проект направлен не только на развитие надпрофессиональных навыков молодежи, увлекающуюся проектной деятельностью, но и на социализацию.
					</p> -->
	</div>
	<div class="opis_1">
		<p class="text_1">Основная цель - профессиональная ориентация молодых людей в сфере высоких интерактивных и цифровых технологий; развитие специальных навыков (компетенций)</p>
		<p class="text_2">в сфере интерактивных, цифровых технологий.</p>
	</div>
	<div class="nominations">
		<div class="grid_nominations">
			<div>
				<img src="assets/img/Group4.png">
				<p>VR-технологии</p>
			</div>
			<div>
				<img src="assets/img/Group5.png">
				<p>АR-технологии</p>
			</div>
			<div>
				<img src="assets/img/Group6.png">
				<p>3D моделирование</p>
			</div>
			<!-- <div>
					<img src="assets/img/Group7.png">
					<p>Умный город</p>
					</div> -->
			<div>
				<img src="assets/img/Group26.png">
				<p>Спортивное пилотирование</p>
			</div>
		</div>
	</div>
</section>
<!-- End home-about Area -->
<section class="home-about-area">
	<div class="row row_img">
		<div class="col-lg-6 no-padding col_1">
			<img src="assets/img/Group28.png" alt="" class="img_1">
		</div>
		<div class="col-lg-6 no-padding">
			<p class="home_text_1"><b>УЧАСТНИКИ ФЕСТИВАЛЯ</b></p>
			<p class="home_text_2">это старшеклассники, студенты, аспиранты в возрасте <b>16-30 лет</b>, увлекающиеся современными интерактивными технологиями</p>
			<a class="primary-btn header-btn text-uppercase btn-3" data-toggle="modal" data-target="#exampleModal" style="">УЧАСТВОВАТЬ</a>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header" style="border-bottom:0px;">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- <p class="text_1">Регистрация откроется в ближайшее время</p> -->
					<p class="text_1">1. Регистрация на портале
						<a href="https://myrosmol.ru/" class="primary-btn header-btn text-uppercase" style="    color: black !important;
    margin-bottom: 40px;
    width: 100%;
    max-height: 92px;
    font-family: 'lato';
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
	margin-top: 30px;
    letter-spacing: 0.2em;">РЕГИСТРАЦИЯ</a>
					</p>
					<p class="text_1">2. Регистрация на мероприятие </p>
					<a href="https://myrosmol.ru/measures/view/73455" class="primary-btn header-btn text-uppercase" style="    color: black !important;
    margin-bottom: 40px;
    width: 100%;
    max-height: 92px;
    font-family: 'lato';
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
	margin-top: 10px;
    letter-spacing: 0.2em;">РЕГИСТРАЦИЯ</a>
				</div>
			</div>
		</div>
	</div>
	<p class="home_prem_text"><span>6 причин</span> принять участие в Окружном фестивале <br> интерактивных технологий «Шаг в будущее»</p>
	<div class="home_grid">
		<div class="home_grid_1">
			<div class="flex_home">
				<div>
					<img src="assets/img/Group29.png" alt="">
				</div>
				<p>Профильные эксперты из Москвы и никаких скучных лекций! Только практические мастер-классы и работа в малых группах;</p>
			</div>
			<div class="flex_home">
				<div>
					<img src="assets/img/Group30.png" alt="">
				</div>
				<p>Возможность прокачать свой проект или придумать «классную» IT-идею;</p>
			</div>
			<div class="flex_home">
				<div>
					<img src="assets/img/Group31.png" alt="">
				</div>
				<p>Деловой нетворкинг. Именно на таком мероприятии Вы сможете найти партнеров и единомышленников;</p>
			</div>

		</div>
		<div class="home_grid_2">
			<div class="flex_home">
				<div>
					<img src="assets/img/Group32.png" alt="">
				</div>
				<p>Аудит технологических проектов;</p>
			</div>
			<div class="flex_home">
				<div>
					<img src="assets/img/Group33.png" alt="">
				</div>
				<p>Ценные призы и подарки для победителей финальной презентационной сессии.</p>
			</div>
			<div class="flex_home">
				<div>
					<img src="assets/img/Group34.png" alt="">
				</div>
				<p>БЕСПЛАТНОЕ проживание и питание для иногородних участников! (Места ограничены!)</p>
			</div>
		</div>
	</div>
	<div class="aling-center">

		<a data-toggle="modal" data-target="#exampleModal" class="primary-btn header-btn text-uppercase btn-2" style="
">УЧАСТВОВАТЬ</a>
		<!-- <a href="https://vk.com/doc103679594_520039442?hash=82840e202cd2ad5c7e&dl=e82d448cf3e824c4b0" 
				class="primary-btn header-btn text-uppercase btn-1" style="">
<img src="assets/img/download1.png" alt="" style="position: relative;
    left: -10px;">
СКАЧАТЬ ПОЛОЖЕНИЕ</a> -->
	</div>
</section>
@include('pages.partners')
<!-- Start products Area -->
<section class="products-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 pb-40 header-text text-center">
				<h1 class="pb-10">Спикеры</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="spikers">
					<div class="">
						<img src="assets/img/Intersect1.png" alt="" class="img-fluid">
					</div>
					<div class="details">
						<h4>Матвей Бебенин</h4>
						<p>
							Менеджер продукта Сбер
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="spikers">
					<div class="">
						<img src="assets/img/Intersect3.png" alt="" class="img-fluid">
					</div>
					<div class="details">
						<h4>Андрей Поскряков </h4>
						<p>
							Специалист по клиентоориентированности
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="spikers">
					<div class="">
						<img src="assets/img/Intersect4.png" alt="" class="img-fluid">
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
				<div class="spikers">
					<div class="">
						<img src="assets/img/sergeev.png" alt="" class="img-fluid" style="width: 194px;">
					</div>
					<div class="details">
						<h4>Никита Сергеев</h4>
						<p>
						Директор проектного офиса, организатор мероприятий
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="spikers">
					<div class="">
						<img src="assets/img/vetrov.png" alt="" class="img-fluid"  style="width: 194px;">
					</div>
					<div class="details">
						<h4>Дмитрий Ветров</h4>
						<p>
						Сoddy преподаватель python, c/c++
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="partn">
	<div class="grid_part">
		<div>
			<img src="assets/img/Group223333.png">
		</div>
		<div>
			<img src="assets/img/Frame312312.png">
		</div>
		<div>
			<img src="assets/img/Logoair.png">
		</div>
	</div>
</div>
<!-- End products Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 pb-40 header-text text-center">
				<h1 class="pb-10">Последние новости</h1>
				<p>
					Самые свежие новости о старте !
				</p>
			</div>
		</div>
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