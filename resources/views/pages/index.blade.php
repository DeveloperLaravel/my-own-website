<x-layout>
   <x-slot name="header">
    <x-basis.navbar>
      
    </x-basis.navbar>
    </x-slot>
    <section id="hero" class="hero section accent-background"> 

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2><span>{{__('messages.Welcome to')}}</span><span class="accent">{{__('messages.Study')}} </span></h2>
             <p>
            {{__('messages.introduction')}}
            </p>
            <div class="d-flex">
              <a href="https://www.youtube.com/watch?v=C2E98BPV66s&list=PLXngueStmWn1rM0oy-ARQjUvJ6orLJTu0&index=12" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>
               {{__('messages.Watch')}}</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div> 

       <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon" ><img src="{{asset('logo/icons8-flutter-logo-96.png')}}" alt="" srcset=""></div>
                <h4 class="title"><a href="{{url('flutter')}}" class="stretched-link">Flutter</a></h4>
              </div>
            </div>
            
            <!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><img src="{{asset('logo/icons8-laravel-96.png')}}" alt="" srcset=""></div>
                <h4 class="title"><a href="{{url('laravel')}}" class="stretched-link">Laravel</a></h4>
              </div>
            </div>
            
            <!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><img src="{{asset('logo/icons8-dart-96.png')}}" alt="" srcset=""></div>
                <h4 class="title"><a href="{{url('dart')}}" class="stretched-link">Dart</a></h4>
              </div>
            </div>
            
            <!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><img src="{{asset('logo/icons8-user-100.png')}}" alt="" srcset=""></div>
                <h4 class="title"><a href="{{url('login')}}" class="stretched-link"> {{__('messages.Teaching')}}</a></h4>
              </div>
            </div>
            
            <!--End Icon Box -->

          </div>
        </div>
      </div>

    </section>
    

</x-layout>
