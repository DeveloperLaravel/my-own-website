<x-layout>
   <x-slot name="header">
    <x-basis.navbar  :title="__('messages.Study')"/>
    </x-slot>



  <!-- Hero Section -->
  <section id="hero" class="hero section accent-background">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-5 justify-content-between">
        <!-- Welcome Text -->
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2>
            <span>{{ __('messages.Welcome to') }}</span>
            <span class="accent">{{ __('messages.Study') }}</span>
          </h2>
          <p>{{ __('messages.introduction') }}</p>
          <div class="d-flex">
            <x-link  href="https://www.youtube.com/watch?v=C2E98BPV66s&list=PLXngueStmWn1rM0oy-ARQjUvJ6orLJTu0&index=12" class="glightbox btn-watch-video d-flex align-items-center">
              <i class="bi bi-play-circle"></i>
              <span>{{ __('messages.Watch') }}</span>
            </x-link>
          </div>
        </div>

        <!-- Hero Image -->
        <div class="col-lg-5 order-1 order-lg-2">
          <x-image  src="{{asset('assets/vendor/images/9.png')}}" class="img-fluid" alt="شعار الموقع" />
        </div>
      </div>
    </div>

    <!-- Icon Boxes -->
    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <!-- Flutter Box -->
         <x-service-box 
          title="Flutter"
          image="assets/vendor/images/logo/icons8-flutter-logo-96.png"
          route="flutter"/>

          <!-- Laravel Box -->
         <x-service-box 
            title="Laravel"
            image="assets/vendor/images/logo/icons8-laravel-96.png"
            route="php"/>

          <!-- Dart Box -->
          <x-service-box 
            title="Dart"
            image="assets/vendor/images/logo/icons8-dart-96.png"
            route="dart"/>

          <!-- Teaching Box -->
           <x-service-box 
            :title="__('messages.Teaching')"
            image="assets/vendor/images/logo/icons8-user-100.png"
            route="home"/>

        </div>
      </div>
    </div>
  </section>
</x-layout>
