@extends("plantilla")

@section("titulo")
  Carrito
@endsection

@section("principal")

  <div class="banner-prod">
    <div class="banner-h2">
      <h2 class="lora-h2">Productos</h2>
    </div>
  </div>
  <div class="products-container">
    <ul class="container-vista">
      @foreach ($carrito as $producto)
      <li >
          <div class="vista-producto">
            <a href=""><img src="" class="product-photo"></a>
            <a href="">{{ $producto->name}}</a>
            <a href=""><p class=prod-price>${{ $producto->id }}</p></a>
          </div>
      </li>

      @endforeach
    </ul>
  </div>

@endsection


{{-- los a tenian en href lo siguiente: /products/{{$product->id}} --}}
{{-- la img en src tenia lo siguiente: /storage/{{ $product->photo }} --}}
