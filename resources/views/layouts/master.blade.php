<!DOCTYPE html>
<html>

<head>
  <title>ITStartUFO</title>
  <!--meta-->
  <meta charset="UTF-8">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">
  <link rel="image_src" href="https://itstartufo.ru/storage/50BxK4MwYFkZzvShiH89sGTorMcCKVi4a9pgtgrp.png" />
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Окружной фестиваль интерактивных технологий «Шаг в будущее», 27-29 октября г. Майкоп" />
  <meta property="og:description" content="Окружной фестиваль интерактивных технологий «Шаг в будущее», 27-29 октября г. Майкоп" />
  <meta property="og:image" content="https://itstartufo.ru/storage/50BxK4MwYFkZzvShiH89sGTorMcCKVi4a9pgtgrp.png"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="AIR" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <link rel="stylesheet" href="assets/css/linearicons.css">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/bootstrap.css">
			<link rel="stylesheet" href="assets/css/magnific-popup.css">
			<link rel="stylesheet" href="assets/css/nice-select.css">	
			<link rel="stylesheet" href="assets/css/hexagons.min.css">							
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/main.css">
			<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
			<link rel="stylesheet" type="text/css" href="css/mainscss.css" />
			<script src="assets/js/modernizr.custom.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@if(session('message'))
  <div id="modalflat" class="modal modal-fixed-footer modal_alert visible" onclick="modal_main_toggle_close();">
    <div class="modal-content">
      <h4 class="alert_title">{{ session('message') }}</h4>
      <p class="alert_down">{{ session('message_1') }}</p>
    </div>
    <div class="flert">
      <a class="modal-close waves-effect waves-light btn-flat btn_ok" id="btn_ok">OK</a>
    </div>
  </div>
  @endif
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
