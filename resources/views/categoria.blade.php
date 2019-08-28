@extends("plantilla")

@section("titulo")
  Preguntas
@endsection

@section("principal")

    <main id="main_categoria">
        <section id="section_categoria">
            <article class="article_categoria"  data-id="1">
                <br>
                <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
                <br>
                Producto 1 - <span>$900</span>
                <br>
                <form method="post" action="/cart/add/1">
                @csrf
                <button class="producto1">Agregar al carrito</button>
                </form>
                <form method="post" action="/cart/1">
                @csrf
                @method('delete')
                <button class="producto1">Borrar del carrito</button>
                </form>
                <form method="post" action="/cart/edit/1">
                @csrf
                <input class="input_categoria" type="number" name="quantity">
                <button class="producto1">Editar carrito</button>
                </form>
            </article>
            <article class="article_categoria" data-id="2">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 2 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
            </article>
            <article class="article_categoria" data-id="3">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 3 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
            </article>
            <article class="article_categoria" data-id="4">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 4 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
            </article>
            <article class="article_categoria" data-id="5">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 5 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
            </article>
            <article class="article_categoria" data-id="6">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 6 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
            </article>
            <article class="article_categoria" data-id="7">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 7 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
            </article>
            <article class="article_categoria" data-id="8">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 8 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
            </article>
            <article class="article_categoria" data-id="9">
              <br>
              <img src="../imgs/insta-1.jpg" alt="" style="width:80%; height:50%">
              <br>
              Producto 9 - <span>$900</span>
              <br>
              <form method="post" action="/cart/add/1">
              @csrf
              <button class="producto1">Agregar al carrito</button>
              </form>
              <form method="post" action="/cart/1">
              @csrf
              @method('delete')
              <button class="producto1">Borrar del carrito</button>
              </form>
              <form method="post" action="/cart/edit/1">
              @csrf
              <input class="input_categoria" type="number" name="quantity">
              <button class="producto1">Editar carrito</button>
              </form>
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
