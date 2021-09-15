@extends('layouts.master')

@section('content')

<section id="programm" class="programm_header">
<div class="img_proggram_2">
<img src="assets/img/Group_39.png" alt="">
</div>
</section>
<section id="info">
<div class="container">
<div class="row">
<p class="info_text_1">Окружной фестиваль интерактивных технологий «Шаг в будущее», пройдет в формате 3-х тематических дней: VR/AR, 3D моделирование, спортивное пилотирование и состоит из мастер-классов и практических занятий с использованием соревновательного инвентаря</p>
<!-- <p class="info_text_2">Особенностью программы, ориентированной на молодых людей в возрасте 
16-30 лет, является изучение и практическое применение цифровых технологий, 
прописанных в национальном проекте <span>«Цифровая экономика РФ»: VR, AR, 
  Big data, «умный город», «интернет вещей»</span></p> -->
<!-- <div class="grey_rectagle" style="    width: 772px; margin-bottom: 16px;">
<p>
1 Этап: Онлайн установочные мастер классы от ведущих экспертов в сфере цифровых технологий. Зарегистрированные участники получат персональное приглашение по электронной почте.
<br><br>
2 Этап: «Окружная школа цифровых технологий «Digital Lab» Южного федерального округа пройдет с 27 по 29 ноября.
</p>
</div> -->
<p class="info_text_3">
Проект направлен на активную молодежь , которая стремиться создавать собственные проекты и (или) реализовать себя с профессиональной точки зрения. Зачастую это становится возможным только благодаря развитию специальных навыков, компетенций, благодаря личностному росту. Речь идет не о специфических знаниях, а о компетенциях, которые позволяют молодому человеку повысить свою личную и профессиональную эффективность, быстро адаптироваться к реалиям современной экономики. Это и умение создавать и работать в команде, умение управлять проектом, тайм - менеджмент и др. Кроме того, все надпрофессиональные навыки должны соответствовать современным реалиям и передовым технологиям, коими на сегодняшний день являются цифровые и интерактивные технологии.
</p>
</div>
	<div class="aling-center">
					<a data-toggle="modal" data-target="#exampleModal" class="primary-btn header-btn text-uppercase" 
					style="background:black; color:white;    background: black;margin-bottom: 40px;
    width: 389px;
    height: 92px;
    position: relative;
    top: -10px;
    left: 10px;
    font-family: 'lato';
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    letter-spacing: 0.2em;
    color: #FFFFFF;"
					>УЧАСТВОВАТЬ</a>
					</div>
</div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
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
@include('pages.partners')
@endsection