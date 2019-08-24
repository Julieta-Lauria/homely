@extends("plantilla")

@section("titulo")
  Carrito
@endsection

@section("principal")

    <main id="main_carrito">
        <section id="section_carrito">

          <article class="article_carrito">
            <p>IMG</p>
            <p>Nombre Producto</p>
            <p>Precio</p>
          </article>

            <article class="article_carrito">
              <img src="../imgs/insta-1.jpg" alt="">
              <p>Silla</p>
              <p>$900</p>
            </article>

        </section>
    </main>
    @endsection

    <script src="js/carrito.js"></script>
