@extends("plantilla")

@section("titulo")
  Productos
@endsection

@section("principal")
<div class="products-container">
  <h2>Listado de productos</h2>
  <p>- Ingresar en cada producto para ver sus detalles -</p>
  <hr>
    <ul>
      @foreach ($products as $product)
      <li>
        <a href="/products/{{$product->id}}">{{$product->name}}</a>
        <hr>
      </li>
      @endforeach
    </ul>
  </div>

@endsection
