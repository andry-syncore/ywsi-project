<div class="card rounded-3 border-0 bg-transparent shadow-sm">
   <div class="rounded-3 position-relative overflow-hidden">
      <img src="{{ $img }}" alt="{{ $alt }}" class="img-fluid w-100" loading="lazy">
   </div>
   <div class="position-absolute start-0 bottom-0 p-4">
      <h2 class="head-2 fw-600 text-light mb-3">{{ $title }}</h2>
      <p class="body-2 fw-400 text-light mb-3">{{ $body }}</p>
      <a href="{{ $link }}" class="btn bg-green-2 text-light rounded-3 fw-600 stretched-link px-3">Baca Selengkapnya</a>
   </div>
</div>
