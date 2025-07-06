<x-layout>
      <x-slot name="header">
 
  <x-basis.navbar  :showCourseFlutter="true" :logo="'logo/icons8-flutter-logo-96.png'"   :title="__('messages.Flutterprogramming')"/>
    </x-slot>




    <section id="about" class="about section  mt-5">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('messages.My studies')}}<br></h2>
        <p>{{__('messages.open-source')}}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>{{__('messages.exampleflutter')}}</h3>
            <img src="{{asset('6.png')}}" class="img-fluid rounded-4 mb-4" alt="">
            <p>
            {{__('messages.mainflutter')}}  
          </p>
            <p>
            {{__('messages.runAppflutter')}}  
          </p>
          <p>{{__('messages.MyAppflutter')}}</p>
          <p>{{__('messages.MaterialAppflutter')}}</p>
          <p>{{__('messages.Scaffoldingflutter')}}</p>
          <p>{{__('messages.AppBarflutter')}}</p>
          <p>{{__('messages.Centerflutter')}}</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                {{__('messages.Keyflutter')}}
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.useflutter')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Installflutter')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.infrastructure')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Dealingflutter')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.professionallyflutter')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Navigationflutter')}}
                </a>
                 </li> 
                 <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.designflutter')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Managementflutter')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Sendingflutter')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Saveflutter')}}
                </a>
                 </li>
                   </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Firebaseflutter')}}
                </a>
                 </li>  
                 <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Responsiveflutter')}}
                </a>
                 </li> 
                   <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.completeflutter')}}
                </a>
                 </li>   
              </ul>
              <p>
                {{__('messages.buildflutter')}}
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('7.jpg')}}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Pe7ZKQARUk4&list=PLXngueStmWn3a8kgGzV9MsKQH8nHbGIr6" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

     </section>







</x-layout>