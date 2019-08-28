@extends("plantilla")

@section("titulo")
  Registrese
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="">
                <div class="">Dashboard</div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      You are logged in!
                      <p><b>Nombre: </b>{{ $dataUser->name }}</p>
                      <p><b>Apellido:</b> {{ $dataUser->last_name }}</p>
                      <p><b>Email:</b> {{ $dataUser->email }}</p>
                      <img src="/storage/{{ $dataUser->avatar }}" width="150">

                            <div class="" aria-labelledby="">
                                <a class="" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
