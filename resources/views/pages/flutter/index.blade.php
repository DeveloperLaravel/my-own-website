<x-layout>
      <x-slot name="header">
 
  <x-basis.navbar  :showCourseFlutter="true" :logo="'assets/vendor/images/logo/icons8-flutter-logo-96.png'"   :title="__('messages.Flutterprogramming')"/>
    </x-slot>




    <section id="about" class="about section  mt-5">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('messages.My studies')}}<br></h2>
        <p>{{__('messages.open-source')}}</p>
      </div><!-- End Section Title -->

      <div class="container">

       
           <x-lesson-box
    title="{{ __('messages.exampleflutter') }}"
    image="assets/vendor/images/6.png"
    :intro-lessons="[
        __('messages.MyAppflutter'),
        __('messages.MyAppflutter'),
        __('messages.MyAppflutter'),
        __('messages.mainflutter'),
        __('messages.MyAppflutter'),
        __('messages.MaterialAppflutter'),
        __('messages.Scaffoldingflutter'),
        __('messages.AppBarflutter'),
        __('messages.Centerflutter')
    ]"
    main-title="{{ __('messages.Keyflutter') }}"
    :main-lessons="[
        ['text' => __('messages.useflutter')],
        ['text' => __('messages.Installflutter')],
        ['text' => __('messages.Dealingflutter')],
        ['text' => __('messages.professionallyflutter')],
        ['text' => __('messages.Navigationflutter')],
        ['text' => __('messages.designflutter')],
        ['text' => __('messages.Managementflutter')],
        ['text' => __('messages.Sendingflutter')],
        ['text' => __('messages.Saveflutter')],
        ['text' => __('messages.Firebaseflutter')],
        ['text' => __('messages.Responsiveflutter')],
        ['text' => __('messages.completeflutter')],
    ]"
    footer-text="{{ __('messages.buildflutter') }}"
    images="assets/vendor/images/7.jpg"
    video="https://www.youtube.com/watch?v=6jKvbBQXPJ4&t=49s"
/>
      </div>

    </section><!-- /About Section -->

     </section>







</x-layout>