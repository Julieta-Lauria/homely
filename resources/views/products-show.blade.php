@extends("plantilla")

@section("titulo")
  {{$productDetail->name}}
@endsection

@section("principal")
<p><b>Detalle de: </b>{{ $productDetail->name }}</p>
<p><b>Precio: $</b> {{ $productDetail->price }}</p>
<p><b>Color:</b> {{ $productDetail->color ? $productDetail->color->name : 'Sin color especificado' }}</p>
<p><b>Dimensión: </b> {{ $productDetail->dimension }}</p>
<p><b>Descripción: </b> {{ $productDetail->description }}</p>
<img src="/storage/{{ $productDetail->photo }}" width="200">
<form action="/products/{{ $productDetail->id }}" method="post">
  @csrf
  <!-- Decimos que aunque en el formulario tengamos metodo post, vamos a usar delete: -->
  {{ method_field('delete') }}
  <div class="">
    <button type="submit" name="send">Borrar producto</button>
  </div>
</form>
<a href="/products/edit/{{ $productDetail->id }}" class="btn btn-warning">Editar producto</a>
@endsection
