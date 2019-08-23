@extends("plantilla")

@section("titulo")
  Preguntas
@endsection

@section("principal")

    <main id="main_categoria">
        <section id="section_categoria">
            <article class="article_categoria"  data-id="1">
                <br>
                <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
                <br>
                Producto 1 - <span>$900</span>
                <br>
                <button class="producto1">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="2">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 2 - <span>$900</span>
              <br>
              <button class="producto2">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="3">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 3 - <span>$900</span>
              <br>
              <button class="producto3">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="4">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 4 - <span>$900</span>
              <br>
              <button class="producto4">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="5">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 5 - <span>$900</span>
              <br>
              <button class="producto5">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="6">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 6 - <span>$900</span>
              <br>
              <button class="producto6">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="7">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 7 - <span>$900</span>
              <br>
              <button class="producto7">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="8">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 8 - <span>$900</span>
              <br>
              <button class="producto8">Agregar al carrito</button>
            </article>
            <article class="article_categoria" data-id="9">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:90%">
              <br>
              Producto 9 - <span>$900</span>
              <br>
              <button class="producto9">Agregar al carrito</button>
            </article>
        </section>
    </main>
    <aside id="aside_categoria">
        <h2>Productos del carrito (<span class="total">0</span>)(<span class="totalprecio">0</span>)</h2>
        <ul class="categoria">

        </ul>
    </aside>
    @endsection

    <script src="js/categoria.js"></script>
