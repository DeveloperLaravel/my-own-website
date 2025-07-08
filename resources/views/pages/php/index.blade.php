<x-layout>
    <x-slot name="header">
 
  <x-basis.navbar  :showCourseLaravel="true" :logo="'assets/vendor/images/logo/icons8-laravel-96.png'"  :title="__('messages.Laravelprogramming')"/>
    </x-slot>





 <!-- Service Details Section -->
    <section id="service-details" class="service-details section mt-5">

      <div class="container mt-4">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="https://bootstrapmade.com/demo/Consulting/" class="active"> {{__('messages.Weblaravel')}}</a>
            </div>

            <p>
            {{__('messages.Whetherlaravel')}}  
          </p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('assets/vendor/images/8.jpg')}}" alt="" class="img-fluid services-img">
            <h3>
            {{__('messages.Beginnerslaravel')}}  
          </h3>
             
           <x-laravel-lessons />

            
              
               
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->








</x-layout>