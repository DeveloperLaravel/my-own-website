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
      </div>
      <!-- End Section Title -->



     <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section ">
      <div class="container">
        <div class="row gy-4">

          <x-post-card 
    image="assets/vendor/images/1.webp"
    :category="__('messages.Book')"
    :title="__('messages.Specification')"
    link="https://spec.dart.dev/DartLangSpecDraft.pdf"
    author-image="assets/vendor/images/abbes.png"
    :author-name="__('messages.abbes')"
    date="2023-05-01"
/>
          <!-- End post list item -->

         <x-post-card 
    image="assets/vendor/images/2.jpg"
    :category="__('messages.Book')"
    :title="__('messages.Development')"
    link="https://library.huree.edu.mn/data/202295/2024-06-03/beginning-app-development-with-flutter-978-1-4842-5181-2_compress.pdf"
    author-image="assets/vendor/images/abbes.png"
    :author-name="__('messages.abbes')"
    date="2024-01-12"
/>
          
          <!-- End post list item -->
<x-post-card 
    image="assets/vendor/images/3.jpg"
    :category="__('messages.Book')"
    :title="__('messages.Beginning')"
    link="https://www.pdfdrive.to/book/beginning-laravel-a-beginners-guide-to-application-development-with-laravel-53-0"
    author-image="assets/vendor/images/abbes.png"
    :author-name="__('messages.abbes')"
    date="2022-07-01"
/>
          <!-- End post list item -->


         
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