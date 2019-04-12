  @auth
    @if(Auth::user()->date_expiration)
        @if($fechaActual <= $expiracion)
            @include('main')
        @else
            @include('expired')
        @endif
    @else
        @include('main')
    @endif
  @else
    @include('login-and-register')
  @endauth
