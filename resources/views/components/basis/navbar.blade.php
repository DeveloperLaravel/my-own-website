
@props([
  'showCourseHome' => false,
  'showCourseDart' => false,
  'showCourseFlutter' => false,
  'showCourseLaravel' => false,
   'logo' => 'logo/icons8-libya-48.png',
   'title' => null,

])

<div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center">
    @auth
  <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
  @else
    <a href="mailto:hnarfr20063@gmail.com">hnarfr20063@gmail.com</a>
  @endauth
          
          </i>
            @guest
          <i class="bi bi-phone d-flex align-items-center ms-4" ><span dir='ltr'>+218 93 4890054</span></i>
          @endguest
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
          <img src="{{ asset($logo)}}" alt="">
          <h1 class="sitename"> 
           {{ $title }}
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

 <!-- {{-- روابط عامة --}} -->
   @guest
            <li><a href="{{route('index')}}" class="active">{{ __('messages.Home')}}<br></a></li>
            <li><a href="{{route('about')}}" class="{{ request()->is('about') ? 'active' : '' }}">{{__('messages.Work team')}}</a></li>
            <li><a href="{{route('portfolio')}}">{{__('messages.Portfolio Manager')}}</a></li>
            <li><a href="{{route('blog')}}"> {{__('messages.Daily blog')}}</a></li>
            <li><a href="#contact">{{__('messages.content')}}</a></li>
@endguest

   <!-- {{-- روابط حسب حالة المستخدم --}} -->
     @auth
     
    @if ($showCourseHome)
         <li><a href="{{ route('dart') }}">Dart</a></li>
       <li><a href="{{ route('flutter') }}">Flutter</a></li>
       <li><a href="{{ route('php') }}">Laravel</a></li>
    @endif
       @if ($showCourseDart)
          <li class="dropdown"><a href="#"><span> المنهج</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
<li><a href="{{ route('flutter') }}">Flutter</a></li>
       <li><a href="{{ route('php') }}">Laravel</a></li>
              </ul>
            </li>
    @endif
       @if ($showCourseFlutter)
       <li class="dropdown"><a href="#"><span> المنهج</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
         <li><a href="{{ route('dart') }}">Dart</a></li>
       <li><a href="{{ route('php') }}">Laravel</a></li>
              </ul>
            </li>
    @endif
       @if ($showCourseLaravel)
      <li class="dropdown"><a href="#"><span>المنهج</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
         <li><a href="{{ route('dart') }}">Dart</a></li>
     <li><a href="{{ route('flutter') }}">Flutter</a></li>
              </ul>
            </li>
    @endif
          <li>
       <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-right"></i> 
      </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

           @else
            <li class="dropdown"><a href="#"><span> {{ __('messages.Open')}}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                   <li><a href="{{ route('login.index') }}">{{ __('messages.Login') }}</a></li>
                   <li><a href="{{ route('register.index') }}">{{ __('messages.register') }}</a></li>
                <!-- <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">انجليزى</a></li> -->
              </ul>
            </li>
               

 @endauth
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
    </div>
