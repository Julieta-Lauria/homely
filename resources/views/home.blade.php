@extends("plantilla")

@section("titulo")
  Registrese
@endsection

@section("principal")

<div class="container justify-content-center">


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif



                      <div class="container-preguntas row justify-content-center">
                      <!--    *******************  TABS  *******************    -->
                          <div class="tabs justify-content-center">
                                          <input name="tabs" type="radio" id="tab-general" checked="checked" class="pestana"/>
                                          <label for="tab-general" class="label">Perfil</label>
                                          <div class="panel">
                                          <h1>Perfil</h1>

                                              <div class="row">
                                                  <div class="col-md-6">
                                                        <br>
                                                        <p><b>Nombre: </b>{{ $dataUser->name }}</p>
                                                        <p><b>Apellido:</b> {{ $dataUser->last_name }}</p>
                                                        <p><b>Email:</b> {{ $dataUser->email }}</p>
                                                  </div>

                                                <div class="col-lg-4 pull-lg-8 text-xs-center">
                                                      <img src="/storage/{{ $dataUser->avatar }}" class="m-x-auto img-fluid img-circle" alt="avatar">
                                                      <div class="register-button">

                                                        <label class="custom-file">
                                                            <input type="file" id="file" class="custom-file-input">
                                                            <span class="custom-file-control ">Choose file</span>
                                                        </label>

                                                      </div>
                                                </div>

                                                </div>
                                          </div>

                                          <input name="tabs" type="radio" id="tab-compras" class="pestana"/>
                                          <label for="tab-compras" class="label">Carrito</label>
                                          <div class="panel">
                                          <h1>Carrito</h1>


                                          </div>

                                          <input name="tabs" type="radio" id="tab-pagos" class="pestana"/>
                                          <label for="tab-pagos" class="label">Editar</label>
                                          <div class="panel">
                                          <h1>Editar Perfil</h1>

                                          <!--    *************************************************  CARD USER/EDIT  ****************************************************************    -->

                                                          <div class="container py-3">
                                                              <div class="row">
                                                                  <div class="mx-auto col-sm-6">

                                                                              <div class="card"><!-- form user info --><!-- form user info -->
                                                                                  <div class="card-header">
                                                                                      <h4 class="mb-0">User Information</h4>
                                                                                  </div>
                                                                                  <div class="card-body">

                                                                                      <form class="form" role="form" autocomplete="off">
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="text" value="Jane">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="text" value="Bishop">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="email" value="email@gmail.com">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Company</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="text" value="">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="url" value="">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <select id="user_time_zone" class="form-control" size="0">
                                                                                                      <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                                                                                      <option value="Alaska">(GMT-09:00) Alaska</option>
                                                                                                      <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                                                                      <option value="Arizona">(GMT-07:00) Arizona</option>
                                                                                                      <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                                                                      <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                                                                      <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                                                                      <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                                                                                  </select>
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="text" value="janeuser">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="password" value="11111122333">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label">Confirm</label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input class="form-control" type="password" value="11111122333">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                              <label class="col-lg-3 col-form-label form-control-label"></label>
                                                                                              <div class="col-lg-9">
                                                                                                  <input type="reset" class="btn btn-secondary" value="Cancel">
                                                                                                  <input type="button" class="btn btn-primary" value="Save Changes">
                                                                                              </div>
                                                                                          </div>
                                                                                      </form>

                                                                                  </div>
                                                                              </div><!-- form user info --><!-- form user info --><!-- form user info -->

                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <!--    *************************************************  CARD USER/EDIT  ****************************************************************    -->




                                          </div><!--    *******************  /CIERRE PANEL3 *******************    -->


                                      </div><!--    *******************  /TABS  *******************    --><!--    *******************  /TABS  *******************    --><!--    *******************  /TABS  *******************    -->


        <!--    ************ LOGOUT BUTTON **********    -->
          <div class="login-button" aria-labelledby="">
              <a class="" name="send" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        <!--    ************ LOGOUT BUTTON **********    -->

      </div> <!--    ************// DIV CONTAINER PREGUNTAS**********    -->

</div>
@endsection
