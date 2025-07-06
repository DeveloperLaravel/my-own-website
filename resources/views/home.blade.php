<x-layout>
   <x-slot name="header">
    <x-basis.navbar :showCourseHome="true"  :title="__('messages.Study')">
    </x-basis.navbar>
    </x-slot>

    <section id="about" class="about section  mt-5">

      <!-- Section Title -->
      <div class="container section-title mt-4" data-aos="fade-up">
        <h2>{{__('messages.My studies')}}<br></h2>
        <p>
        {{__('messages.After')}}  
</p>
      </div><!-- End Section Title -->



     <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section ">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="{{asset('1.webp')}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">{{__('messages.Book')}}</p>

              <h2 class="title">
                <a href="https://spec.dart.dev/DartLangSpecDraft.pdf">{{__('messages.Specification')}}</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{asset('abbes.png')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">{{__('messages.abbes')}}</p>
                  <p class="post-date">
                    @php
                       $created_at = \Carbon\Carbon::parse('2023-05-01'); 
                     @endphp
                    <time datetime="{{ $created_at->toDateString() }}"> {{ $created_at->diffForHumans() }}
</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="{{asset('2.jpg')}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">{{__('messages.Book')}}</p>

              <h2 class="title">
                <a href="https://library.huree.edu.mn/data/202295/2024-06-03/beginning-app-development-with-flutter-978-1-4842-5181-2_compress.pdf">{{__('messages.Development')}}</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{asset('abbes.png')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">{{__('messages.abbes')}}</p>
                  <p class="post-date">
                       @php
                       $created_at = \Carbon\Carbon::parse('2024-01-12'); 
                     @endphp
                    <time datetime="{{ $created_at->toDateString() }}"> {{ $created_at->diffForHumans() }}
</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="{{asset('3.jpg')}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">{{__('messages.Book')}}</p>

              <h2 class="title">
                <a href="https://www.pdfdrive.to/book/beginning-laravel-a-beginners-guide-to-application-development-with-laravel-53-0">{{__('messages.Beginning')}}</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{asset('abbes.png')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">{{__('messages.abbes')}}</p>
                  <p class="post-date">
 @php
                       $created_at = \Carbon\Carbon::parse('2022-07-01'); 
                     @endphp
                    <time datetime="{{ $created_at->toDateString() }}"> {{ $created_at->diffForHumans() }}
</time>                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->


         
        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
         
        </div>
        <p>
{{__('messages.Istarted')}}
        </p>
    </div>
    </section><!-- /Blog Pagination Section -->

    
</x-layout>