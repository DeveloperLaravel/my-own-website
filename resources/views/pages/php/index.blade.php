<x-layout>
      <x-slot name="header">
 
<div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:hnarfr20063@gmail.com">hnarfr20063@gamil.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4" ><span dir='ltr'>+218 93 4890054</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://github.com/DeveloperLaravel/" class="github"><i class="bi bi-github"></i></a>
          <a href="https://www.facebook.com/basbwhlyqh/" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

<div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('logo/icons8-laravel-96.png')}}" alt="">
          <h1 class="sitename"> 
        Laravel
        </h1>
          <span>.</span>
        </a> 
 
 <nav id="navmenu" class="navmenu">
          <ul>
             <li class="dropdown"><a href="#"><span> {{ __('messages.language')}}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li><a rel="alternate"  hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">  {{ $properties['native'] }}</a></li>
                    @endforeach
                <!-- <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">انجليزى</a></li> -->
              </ul>
            </li>
            <li><a href="{{url('/')}}" class="active">{{ __('messages.Home')}}<br></a></li>
            <li><a href="{{url('about')}}" class="{{ request()->is('about') ? 'active' : '' }}">{{__('messages.Work team')}}</a></li>
            <li><a href="{{url('portfolio')}}">{{__('messages.Portfolio Manager')}}</a></li>
            <li><a href="{{url('blog')}}"> {{__('messages.Daily blog')}}</a></li>
           
            <li><a href="#contact">{{__('messages.content')}}</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
    </div>

    </x-slot>
</x-layout>