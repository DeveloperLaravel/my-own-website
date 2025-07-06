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
            <h3>Voluptatem dignissimos provident laboris nisi ut aliquip ex ea commodo</h3>
            <img src="{{asset('code.png')}}" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
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
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('assets/img/about-2.jpg')}}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


</x-layout>