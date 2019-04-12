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
                </div>
            </div>
        </nav>

        <main>
            <div class="d-flex justify-content-center" style="height:80vh; align-items:center;">
                <div>
                    <h2 class="text-center">Su usuario ha expirado!<br>
                    por inactividad en la plataforma y/o en nuestro sistema de facturación.<br>
                    Contacte a su asesor de ventas para su reactivación.
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top:5px;">
            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event      .preventDefault(); document.getElementById('logout-form').submit();">
                Volver
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
        </main>
    </div>
    <script src="/js/script.js" defer></script>
</body>
</html>