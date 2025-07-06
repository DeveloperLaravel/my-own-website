<x-layout>
  <x-slot name="header">
    <x-basis.navbar :showCourseDart="true" :logo="'logo/icons8-dart-96.png'"  :title="__('messages.DARTprogramming')" />
    </x-slot>
    <!-- About Section -->

    <section id="about" class="about section  mt-5">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('messages.My studies')}}<br></h2>
        <p>{{__('messages.important')}}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>{{__('messages.Simpledart')}}</h3>
            <img src="{{asset('code.png')}}" class="img-fluid rounded-4 mb-4" alt="">
            <p>
            {{__('messages.maindart')}}  
          </p>
            <p>
            {{__('messages.voidDART')}}  
          </p>
          <p>{{__('messages.Insidedart')}}</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                {{__('messages.First')}}
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.thedart')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.firstdart')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Variablesdart')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.flowdart')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Definingdart')}}
                </a>
                 </li> <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Workingdart')}}
                </a>
                 </li> 
                 <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Foundationdart')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.flexibledart')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Handlingdart')}}
                </a>
                 </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Catchdart')}}
                </a>
                 </li>
                   </li>
                  <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Usingdart')}}
                </a>
                 </li>  
                 <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Importantdart')}}
                </a>
                 </li> 
                   <li><i class="bi bi-check-circle-fill"></i>  <a href="">
                 {{__('messages.Writingdart')}}
                </a>
                 </li>   
              </ul>
              <p>
                {{__('messages.thisdart')}}
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('5.png')}}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Pe7ZKQARUk4&list=PLXngueStmWn3a8kgGzV9MsKQH8nHbGIr6" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


</x-layout>