<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield("titulo")</title>
    <link rel="icon" href="/favicon.png" type="image/ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/ico" />
  </head>
  <body>
  <div class="banner_negro">
    <p>Envios y devoluciones gratuitas para todos los pedidos!</p>
    <ul>
      <a href="#"><li>ACERCA</li></a>
      <a href="#"><li>LLAMANOS (011) 5310-1450</li></a>
    </ul>
  </div>
  <header> <!-- Header segundo avance -->
   <div class="nav">
    <a href="{{ url('/index') }}"><h1 style="font-size:50px;">/Homely\</h1></a>
    <nav id="categorias">
     <ul>
      <li><a href="#">Living</a>
        <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="#">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
        </ul>
      </li>
      <li><a href="#">Comedor</a>
        <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
        </ul></li>
      <li><a href="#">Dormitorio</a>
        <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
          <ul>
           <li class="li_col"><a href="">Lorem</a></li>
           <li class="li_col"><a href="#">Ipsum</a></li>
           <li class="li_col"><a href="#">Lorem</a></li>
          </ul>
        </ul></li>
      <li><a href="#">Oficina</a>
        <ul id="menu_living">
          <ul>
           <li><a href="#">Lorem</a></li>
           <li><a href="#">Ipsum</a></li>
           <li><a href="#">Lorem</a></li>
          </ul>
        </ul></li>
     </ul>
   </nav>
   <nav id="otros">
    <ul>
     <li id="pruebaa">
      <form class="search" action="index.html" method="post">
        <fieldset>
         <input type="search" id="busqueda">
         <button type="submit" name="button">
          <i class="fas fa-search"></i>
         </button>
        </fieldset>
      </form></li> <!--@@ a modo de prueba, despues se cambian por íconos -->
     <li id="menu_hamburguesa"><a href="#"><i class="fas fa-bars"></i></i></a></li>
     <li><a href="{{ url('/login') }}"><i class="fas fa-sign-in-alt"></i></a></li>
     <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
   </nav>
   </div>
  </header>
  <section>
    @yield("principal")
  </section>
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-newsletter">
        <h3>Suscribite</h3>
        <p>Recibí nuestro newsletter para conocer todas las últimas novedades y ofertas.</p>
        <div class="subscription-form">
          <form class="suscription" action="index.html" method="post">
            <label for="">
              <input type="text" name="" value="" placeholder="Email">
            </label>
            <button type="button" name="button">ENVIAR</button>
          </form>
        </div>
      </div>
    <div class="site-footer">
      <div class="link-list">
        <h5>AYUDA</h5>
        <ul class="links">
          <li><a href="{{ url('/faq') }}">Preguntas</a></li>
          <li><a href="{{ url('/products')}}">Productos</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h5>CUENTA</h5>
        <ul class="links">
          <li><a href="{{ url('/login') }}">Ingresar</a></li>
          <li><a href="{{ url('/register') }}">Registro</a></li>
          <li><a href="#">Ordenes</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h5>EMPRESA</h5>
        <ul class="links">
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Política</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="social-media">
      <a href="#"><img src="imgs/facebook-logo-button.svg" width="30px" height="30px" alt=""></a>
      <a href="#"><img src="imgs/twitter-logo-button.svg" width="30px" height="30px" alt=""></a>
      <a href="#"><img src="imgs/instagram-logo.svg" width="30px" height="30px" alt=""></a>
      <a href="#"><img src="imgs/pinterest-logo.svg" width="30px" height="30px" alt=""></a>
  </div>
  <hr>
  <p>© 2019, Homely.<br> Todos los derechos reservados.</p>
  </footer>
  </body>
  </html>
