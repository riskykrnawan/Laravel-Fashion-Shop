@foreach ($items as $item)        
  <div class="col-md-2 col-6 mt-3">
    <div class="card">
      <img src="{{ $item['photo'] }}" height="200px" class="card-img-top" alt="...">
      <div class="card-body p-2">
        <p class="card-title">{{ mb_strimwidth($item['name'], 0, 56, "...") }}</p>
        <p class=""><i class="bi bi-star-fill text-warning"> </i>{{ $item['rating'] }}</p>
        <p class="card-price mb-1"> <span class="">Rp</span>{{ number_format($item['price'],2, ',', '.') }}</p>
        <p class="text-secondary card-sold">{{ $item['sold'] }}+ Total Terjual</p>
      </div>
    </div>  
  </div>
@endforeach