
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
          <img src="{{asset('logo/icons8-libya-48.png')}}" alt="">
          <h1 class="sitename"> مواقع الدراسة</h1>
          <span>.</span>
        </a> 
 
 <nav id="navmenu" class="navmenu">
          <ul>
             <li class="dropdown"><a href="#"><span> لغة</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="">عربى</a></li>
                <li><a href="#">انجليزى</a></li>
              </ul>
            </li>
            <li><a href="{{url('/')}}" class="active">الرئيسية<br></a></li>
            <li><a href="{{url('about')}}" class="{{ request()->is('about') ? 'active' : '' }}">فريق العمل</a></li>
            <li><a href="{{url('portfolio')}}">مدير المحفظة</a></li>
            <li><a href="{{url('blog')}}">مدونة يومية</a></li>
           
            <li><a href="#contact">محتو1ى</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
    </div>