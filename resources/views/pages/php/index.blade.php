<x-layout>
    <x-slot name="header">
 
  <x-basis.navbar  :showCourseLaravel="true" :logo="'logo/icons8-laravel-96.png'"  :title="__('messages.Laravelprogramming')"/>
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
            <ul>
              <li><i class="bi bi-check-circle"></i> <span> {{__('messages.Stagelaravel')}}.</span></li>
            </ul>
            <p>
              <a href="">

                {{__('messages.Whatlaravel')}}
              </a>
            </p>
              <p>
                <a href="">

                  {{__('messages.Settinglaravel')}}
                </a>
            </p>
                <p>
                <a href="">

                  {{__('messages.Understandinglaravel')}}
                </a>
            </p>
                <p>
                <a href="">

                  {{__('messages.Handlinglaravel')}}
                </a>
            </p>
              <p>
                <a href="">

                  {{__('messages.Createlaravel')}}
                </a>
            </p>
              <p>
                <a href="">

                  {{__('messages.Usinglaravel')}}
                </a>
            </p>
            
           
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>{{__('messages.Stagelarvel')}}</span></li>
            </ul>
            <p>
              <a href="">
                {{__('messages.ORMlaravel')}}
              </a>
            </p>
             <p>
              <a href="">
                {{__('messages.AuthenticationLARAVEL')}}
              </a>
            </p>
             <p>
              <a href="">
                {{__('messages.registrationlaravel')}}
              </a>
            </p>
             <p>
              <a href="">
                {{__('messages.Flashlaravel')}}
              </a>
            </p>
               <p>
              <a href="">
                {{__('messages.Filelaravel')}}
              </a>
            </p>
               <p>
              <a href="">
                {{__('messages.Sendinglaravel')}}
              </a>
            </p>
             <ul>
              <li><i class="bi bi-check-circle"></i> <span>{{__('messages.Advancedlaravel')}}</span></li>
            </ul>
                 <p>
              <a href="">
                {{__('messages.RESTfullaravel')}}
              </a>
            </p>
                <p>
              <a href="">
                {{__('messages.Protectlaravel')}}
              </a>
            </p>
                <p>
              <a href="">
                {{__('messages.Uselaravel')}}
              </a>
            </p>
               <p>
              <a href="">
                {{__('messages.Multilinguallaravel')}}
              </a>
            </p>
               <p>
              <a href="">
                {{__('messages.Designlaravel')}}
              </a>
            </p>
              <p>
              <a href="">
                {{__('messages.Improvelaravel')}}
              </a>
            </p>
              <p>
              <a href="">
                {{__('messages.Publishlaravel')}}
              </a>
            </p>
            
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->








</x-layout>