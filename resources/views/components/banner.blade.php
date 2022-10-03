<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    @foreach ($banners as $banner)
      <div class="swiper-slide m-auto"><img src="{{ asset($banner['imageUrl']) }}" class="img-fluid img-ads" alt="..."></div>
    @endforeach
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
