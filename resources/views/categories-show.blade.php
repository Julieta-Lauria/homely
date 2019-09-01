@extends("plantilla")

@section("titulo")
 Productos Categoria
@endsection

@section("principal")

<div class="banner-prod">
  <div class="banner-h2">
    <h2 class="lora-h2">{{$productsCategory->name}}</h2>
  </div>
</div>
  <div class="products-container">
    <ul>
      @foreach ($productsCategory->products as $product)
      <li>
        <div class="vista-producto">
          <img src="/storage/{{ $product->photo }}" class="product-photo">
          <a href="/products/{{$product->id}}">{{$product->name}}</a>
          <p class=prod-price>${{ $product->price }}</p>
        </div>

      </li>
      @endforeach

    </ul>
  </div>

@endsection
