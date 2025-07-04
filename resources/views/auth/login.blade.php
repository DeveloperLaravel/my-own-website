<x-layout>
    @push('style')
<link rel="stylesheet" href="{{asset('css.css')}}">
    @endpush
   <x-slot name="header">
       <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:hnarfr20063@gmail.com">hnarfr20063@gamil.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4" ><span dir='ltr'>+218 93 4890054</span></i>
        </div>
    
    
<div class="branding d-flex align-items-cente">
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
            
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
    </div>
    </x-slot>
    <section> 
<div class="wrapper">
        <div class="logo">
            <img src="{{asset('logo/icons8-libya-48.png')}}" alt="">
        </div>
        <div class="text-center mt-4 name">
            {{__('messages.Login')}}
                 @if ($errors->any())
    <div style="color:red">@foreach ($errors->all() as $e)<p>{{ $e }}</p>@endforeach</div>
@endif
        </div>
        <form method="POST" action="{{route('login')}}" class="p-3 mt-3">
                    @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user p-2"></span>
                <input type="text" name="email" id="userName" placeholder="{{__('messages.email')}}">
           
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key p-2"></span>
                <input type="password" name="password" id="pwd" placeholder="{{__('messages.password')}}">
            </div>
            <button type="submit" class="btn mt-3">{{__('messages.save')}}</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">{{__('messages.Forgotpassword')}}</a>{{__('messages.or')}}<a href="{{route('register.index')}}">{{__('messages.Signup')}}</a>
        </div>
         @if(session('errors'))
      <div>{{ session('errors')->first() }}</div>
    @endif
    </div>
    </section>

</x-layout>
