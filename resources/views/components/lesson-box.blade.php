<div class="row gy-4">
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <h3>{{ $title }}</h3>
    <x-image src="{{ asset($image) }}" class="img-fluid rounded-4 mb-4" alt="صورة القسم" />
    <x-lesson :lessons="$introLessons" />
  </div>

  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
    <div class="content ps-0 ps-lg-5">
      <p class="fst-italic">{{ $mainTitle }}</p>
      <x-lesson-section :items="$mainLessons" />
      <p>{{ $footerText }}</p>

      @if($video)
      <div class="position-relative mt-4">
        <x-image src="{{ asset($images)  }}" class="img-fluid rounded-4" alt="مشاهدة الفيديو" />
        <x-link href="{{ $video }}" class="glightbox pulsating-play-btn"></x-link>
      </div>
      @endif
    </div>
  </div>
</div>
