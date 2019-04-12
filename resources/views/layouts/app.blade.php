<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grupoplus</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="/css/style.css" rel="stylesheet">
    <!--Scripts-->
    <script src="/js/app.js" defer></script><!--JQuery-->
      <!--selecTwo-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" defer></script>
  <!--tinymce-->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
    tinymce.init({ selector:'textarea' });
  </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-xl navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="" width="180"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Center Side Of Navbar -->
                  @auth
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <form method="post" class="form-tablet form-inline my-2 my-lg-0" action="/store/search">
                          @csrf
                          <div class="form-group">
                            <input type="search" name="search" class="form-control input-search" placeholder="Buscar..." style="border-radius:0;"/>
                            <button type="submit" class="btn btn-primary btn-search" name="" value="" style="border-radius:0;">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </form>
                      </li>
                    </ul>
                  @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                    @auth
                            <li class="nav-item">
                              <a class="nav-link" href="/">Nuestras Marcas</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/bills/{{Auth::user()->id}}">Operaciones</a>
                            </li>

                            @if(Auth::user()->role == 'admin')
                            <li class="nav-item">
                              <a class="nav-link" href="/gr8p0pl85">Panel de Administrador</a>
                            </li>
                            @endif<!--ifadmin-->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/cart">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge badge-pill badge-dark" id="nav-count">{{Cart::count()}}</span>
                              </a>
                            </li>
                      @endauth
                    </ul>
                </div>
            </div>
        </nav>

<div class="shop" style="left:50%;bottom:50%;width:50%;position:fixed;z-index:1000;">
    

</div>

        <main>
            @yield('content')
        </main>
    </div>
    <script src="/js/script.js" defer></script>
</body>
</html>
