<x-layout>
  <x-slot name="header">
    <x-basis.navbar :showCourseDart="true" :logo="'assets/vendor/images/logo/icons8-dart-96.png'"  :title="__('messages.DARTprogramming')" />
    </x-slot>
    <!-- About Section -->
    <section id="about" class="about section  mt-5">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('messages.My studies')}}<br></h2>
        <p>{{__('messages.important')}}</p>
      </div><!-- End Section Title -->
      <div class="container">
       <x-lesson-box
    title="{{ __('messages.Simpledart') }}"
    image="assets/vendor/images/code.png"
    :intro-lessons="[
        __('messages.maindart'),
        __('messages.voidDART'),
        __('messages.Insidedart')
    ]"
    main-title="{{ __('messages.firstdart') }}"
    :main-lessons="[
        ['text' => __('messages.thedart')],
        ['text' => __('messages.viodart')],
        ['text' => __('messages.Variablesdart')],
        ['text' => __('messages.flowdart')],
        ['text' => __('messages.Definingdart')],
        ['text' => __('messages.Workingdart')],
        ['text' => __('messages.Foundationdart')],
        ['text' => __('messages.flexibledart')],
        ['text' => __('messages.Handlingdart')],
        ['text' => __('messages.Catchdart')],
        ['text' => __('messages.Usingdart')],
        ['text' => __('messages.Importantdart')],
        ['text' => __('messages.Writingdart')],
    ]"
    footer-text="{{ __('messages.thisdart') }}"
    images="assets/vendor/images/5.png"
    video="https://www.youtube.com/watch?v=Pe7ZKQARUk4&list=PLXngueStmWn3a8kgGzV9MsKQH8nHbGIr6"
/>
      </div>
    </section><!-- /About Section -->
</x-layout>