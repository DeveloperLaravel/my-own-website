
@props([
  'showCourseHome' => false,
  'showCourseDart' => false,
  'showCourseFlutter' => false,
  'showCourseLaravel' => false,
   'logo' => 'assets/vendor/images/logo/icons8-libya-48.png',
   'title' => null,

])

<div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center">
    @auth
    <x-link href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</x-link>
  @else
  <x-link href="mailto:hnarfr20063@gmail.com">hnarfr20063@gmail.com</x-link>
  @endauth
          
          </i>
            @guest
          <i class="bi bi-phone d-flex align-items-center ms-4" ><span dir='ltr'>+218 93 4890054</span></i>
          @endguest
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <x-link href="https://www.facebook.com/basbwhlyqh/" ><i class="bi bi-facebook"></i></x-link>
            <x-link href=""><i class="bi bi-instagram"></i></x-link>
            <x-link href="https://github.com/DeveloperLaravel"><i class="bi bi-github"></i></x-link>
            <x-link href=""><i class="bi bi-twitter"></i></x-link>
            <x-link href=""><i class="bi bi-linkedin"></i></x-link>
        </div>
      </div>
    </div>

<div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
          <x-link href="{{route('index')}}" class="logo d-flex align-items-center">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <x-image src="{{asset($logo)}}" alt="شعار الموقع" />
              
              <h1 class="sitename "> 
                {{ $title }}
              </h1>
              <span>.</span>
            </x-link>



 
 <nav id="navmenu" class="navmenu">
         <x-ul>
              <li class="dropdown"><x-link href="https://www.facebook.com/basbwhlyqh/"> <span> {{ __('messages.language')}}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></x-link>
              <x-ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                  <x-link  hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</x-link>
                </li>
                    @endforeach
                <!-- <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">انجليزى</a></li> -->
              </x-link>
            </li>

 <!-- {{-- روابط عامة --}} -->
   @guest
            <li>
              <x-link href="{{route('index')}}"> {{ __('messages.Home')}} <br></x-link>
            </li>
            <li>
              <x-link href="{{route('about')}}" class="{{ request()->is('about') ? 'active' : '' }}"> {{__('messages.Work team')}}</x-link>
            </li>
            <li>
              <x-link href="{{route('portfolio')}}"> {{__('messages.Portfolio Manager')}}</x-link>
            </li>
            <li>
              <x-link href="{{route('blog')}}"> {{__('messages.Daily blog')}}</x-link>
            </li>
            <li>
              <x-link href="{{route('blog')}}"> {{__('messages.content')}}</x-link>
            </li>
@endguest

   <!-- {{-- روابط حسب حالة المستخدم --}} -->
     @auth
     
    @if ($showCourseHome)
         <li>
          <x-link href="{{route('dart')}}"> Dart</x-link>
        </li>
       <li>
        <x-link href="{{route('flutter')}}"> Flutter</x-link>
      </li>
       <li>
          <x-link href="{{route('php')}}"> Laravel</x-link>
      </li>
    @endif
       @if ($showCourseDart)
          <li class="dropdown">
            <x-link href="#"><span> المنهج</span> <i class="bi bi-chevron-down toggle-dropdown"></i></x-link>
          <x-ul>
<li>
  <x-link href="{{ route('flutter') }}">Flutter </x-link>
</li>
       <li>
          <x-link href="{{ route('php') }}">Laravel </x-link>
</li>
               </x-ul>
            </li>
    @endif
       @if ($showCourseFlutter)
       <li class="dropdown">
         <x-link href="#"><span> المنهج</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
        </x-link>
              <x-ul>
         <li>
          <x-link href="{{ route('dart') }}">
         Dart</x-link>
        </li>
       <li>
        <x-link href="{{ route('php') }}">Laravel
        </x-link>
      </li>
               </x-ul>
            </li>
    @endif
       @if ($showCourseLaravel)
      <li class="dropdown">
        <x-link href="#"><span>المنهج</span> <i class="bi bi-chevron-down toggle-dropdown"></i> </x-link>
               <x-ul>
         <li>
          <x-link href="{{ route('dart') }}">Dart
          </x-link>
        </li>
     <li>
       <x-link href="{{ route('flutter') }}">Flutter
      <a href="{{ route('flutter') }}">
 </x-link>
    </li>
</x-ul>
            </li>
    @endif
          <li>
      <x-link href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-right"></i> 
    </x-link>
                    <x-form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </x-form>

                    </li>

           @else
            <li class="dropdown">
              <x-link href="#"><span> {{ __('messages.Open')}}</span> <i class="bi bi-chevron-down toggle-dropdown"></i> </x-link>
              <x-ul>
                   <li>
                    <x-link href="{{ route('login.index') }}">
                      {{ __('messages.Login') }}
                     </x-link>
                  </li>
                   <li>
                     <x-link href="{{ route('register.index') }}">
{{ __('messages.register') }}
                     </x-link>
                  </li>
                <!-- <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">انجليزى</a></li> -->
               </x-ul>
            </li>
               

 @endauth

           </x-ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
    </div>
