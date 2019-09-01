@extends("plantilla")

@section("titulo")
  Productos
@endsection

@section("principal")

  <div class="banner-prod">
    <div class="banner-h2">
      <h2 class="lora-h2">Todos los productos</h2>
    </div>
  </div>
  <div class="products-container">
    <ul>
      @foreach ($products as $product)
      <li>
        <a href="/products/{{$product->id}}">{{$product->name}}</a>
        <img src="/storage/{{ $product->photo }}" class="product-photo">
        <p class=prod-price>${{ $product->price }}</p>
      </li>
      @endforeach
    </ul>
  </div>

@endsection
