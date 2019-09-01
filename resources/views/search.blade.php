@extends("plantilla")

@section("titulo")
  Productos
@endsection

@section("principal")


      <h2 class="lora-h2" id="search-h2">Resultados de tu búsqueda:</h2>

  <div class="products-container">
    <ul class="container-vista">

      @foreach ($resultado as $product)
      <li>
        <div class="vista-producto">
          <a href="/products/{{$product->id}}"><img src="/storage/{{ $product->photo }}" class="product-photo"></a>
          <a href="/products/{{$product->id}}">{{$product->name}}</a>
          <a href="/products/{{$product->id}}"><p class=prod-price>${{ $product->price }}</p></a>

        </div>

      </li>
      @endforeach
    </ul>
  </div>

@endsection
