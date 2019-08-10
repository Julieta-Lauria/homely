@extends("plantilla")

@section("titulo")
  Productos
@endsection

@section("principal")
  <h1>Mis productos</h1>
  <ul>
    @foreach ($products as $product)
    <li>
      <p>{{$product->name}}</p>
    </li>
    @endforeach
  </ul>
@endsection
