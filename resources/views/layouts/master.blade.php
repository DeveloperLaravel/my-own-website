<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="{{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'rtl' : 'ltr' }}">
  <!--  -->

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? 'مواقع الدراسة' }}</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

 <!-- Favicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link href="{{asset('logo/icons8-libya-48.png')}}" rel="icon">
  <link href="{{asset('logo/icons8-libya-48.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
<link rel="stylesheet" href="{{ asset('assets/custom.css') }}">


  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  
  <!-- <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet"> -->
   <!-- <link href=" {{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet"> -->

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
 
@stack('style')
</head>
<body class="index-page" >
  <header id="header" class="header fixed-top">
      {{ $header ?? '' }}
  </header>
  <main class="main">
    {{$slot}}
  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <!-- <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script> -->
  <!-- <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script> -->
  <!-- <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script> -->
  <!-- <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script> -->
  <!-- <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script> -->
  <!-- <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script> -->

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

@stack('scripts')
</body>

</html>