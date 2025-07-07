<div class="col-xl-3 col-md-6">
  <div class="icon-box">
    <div class="icon">
      <x-image src="{{ asset($image) }}" alt="{{ $title }}" />
    </div>
    <h4 class="title">
      <x-link href="{{ route($route) }}" class="stretched-link">
        {{ $title }}
      </x-link>
    </h4>
  </div>
</div>