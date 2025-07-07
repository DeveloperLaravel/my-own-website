<div class="col-lg-4">
  <article>
    <div class="post-img">
      <img src="{{ asset($image) }}" alt="{{ $title }}" class="img-fluid">
    </div>
    <p class="post-category">{{ $category }}</p>
    <h2 class="title">
      <a href="{{ $link }}" target="_blank" rel="noopener">{{ $title }}</a>
    </h2>
    <div class="d-flex align-items-center">
      <img src="{{ asset($authorImage) }}" alt="{{ $authorName }}" class="img-fluid post-author-img flex-shrink-0">
      <div class="post-meta">
        <p class="post-author">{{ $authorName }}</p>
        <p class="post-date">
          <time>{{ $date }}</time>
        </p>
      </div>
    </div>
  </article>
</div>