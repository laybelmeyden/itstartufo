<!DOCTYPE html>
<html>

<head>
  <title>{{ $new_title or 'ITStartUFO' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $new_title or 'ITStartUFO' }}" />
  <meta property="og:description" content="{{ $meta or 'ITStartUFO' }}" />
  <meta property="og:image" href="storage/{{ $new_img or 'assets/img/air_fav.png' }}" content="storage/{{ $new_img or 'assets/img/air_fav.png' }}"  />
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
			<script src="assets/js/modernizr.custom.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
