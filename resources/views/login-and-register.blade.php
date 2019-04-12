 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grupoplus</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!--Scripts-->
    <script src="/js/app.js" defer></script><!--JQuery-->
</head>
<body>
<div id="app">
<div class="container-fluid full-width full-height">
<div class="row height-100">
  <!--CARD 1-->
<div class="col-md-6 half-1">
<div class="row" style="display:flex; justify-content:center;">
<div class="col-md-10">
    <div style="padding-top:60px;">
    <img src="/img/logo.png" class="logo" width="400px">
    <h1 style="font-weight:300;" class="title-landing"><i>¡La <strong style="font-weight:600;">Pasión</strong> es nuestro <br> Mejor Talento!</i></h1>
    <br><br>
    <h2>Distribuidor mayorista de:</h2>
    <br><br>
  </div>
 </div>
</div>
<div class="row" style="display:flex; justify-content:center;">
<div class="col-md-12" style="display:flex; justify-content:center;">
    <div class="col-md-4">
        <img src="/img/WIREPLUS.png" width="230px"/>
    </div>
    <div class="col-md-4">
        <img src="/img/LEDPLUS.png" width="230px"/>
    </div> 
    <div class="col-md-4">
        <img src="/img/3M.png" width="230px"/>
    </div>
    </div>
</div>
<br>

<div class="row" style="display:flex; justify-content:center;">
<div class="col-md-12" style="display:flex; justify-content:center;">
    <div class="col-md-4">
        <img src="/img/METALNET.png" width="230px"/>
    </div> 
    <div class="col-md-4">
        <img src="/img/RCG.png" width="230px"/>
    </div>
    <div class="col-md-4">
        <img src="/img/MVTEAM.png" width="230px"/>
    </div> 
</div>
</div>
<br>

<div class="row" style="display:flex; justify-content:center;">
<div class="col-md-12" style="display:flex; justify-content:center;">
    <div class="col-md-4">
        <img src="/img/NETVISION.png" width="230px"/>
    </div>
    <div class="col-md-4">
        <img src="/img/CAPITAL.png" width="230px"/>
    </div>
    <div class="col-md-4">
        <img src="/img/asglogo.png" width="230px"/>
    </div>
</div>
</div>

<br>

<div class="row" style="display:flex; justify-content:center;">
<div class="col-md-12" style="display:flex; justify-content:center;">
    <div class="col-md-4">
        <img src="/img/LOGOHIKVISION.png" width="230px"/>
    </div>
    <div class="col-md-4">
        <img src="/img/CHUANGO.png" width="230px"/>
    </div>
    <div class="col-md-4">
        <img src="/img/LOGO_ECOGREEN.png" width="230px"/>
    </div>
    
</div>
</div>


</div>

<!--CARD2-->
<div class="col-md-6 half-2">
  @if(session()->has('message'))<!--has message-->
  <div class="alert alert-success success-message">
    {{ session()->get('message') }}
  </div>
  @endif
<h2>Distribuidor Autorizado</h2>

<form method="POST" action="{{ route('login') }}" class="login">
    @csrf
    <div class="form-group row">
        <div class="col-md-5">
            <input placeholder="Correo Electrónico" id="email-login" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <br><br>
        <div class="col-md-5">
            <input placeholder="Contraseña" id="password-login" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <br><br>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary btn-blue">
                Entrar
            </button>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember" style="font-weight:300;">
                    Recordar mis Datos
                </label>
            </div>
        </div>
    </div>
</form>

<h2>¿Quieres ser un distribuidor autorizado?</h2>
        <p style="padding:10px 10px 0 10px; text-align: justify; text-justify: inter-word; margin:20px 0 20px 0;">Para ver los Precios Online Actualizados en todo momento para usted, debe estar registrado en nuestro sistema, por lo cual debe rellenar el siguiente formulario con la información indicada. Nos pondremos en contacto con Ud. en las próximas 48 horas para finalizar el proceso de registro y enviarle el usuario y password con el que podrá acceder al catálogo de precios online.</p>
          <br>
            <form method="POST" action="/user/mail" class="register">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <input placeholder="Nombre de la Empresa *" id="companyName" type="text" class="form-control{{ $errors->has('companyName') ? ' is-invalid' : '' }}" name="companyName" value="{{ old('companyName') }}" required autofocus>
                        @if ($errors->has('companyName'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('companyName') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <input placeholder="Teléfono Fijo *" id="telephoneNumber" type="number" class="form-control{{ $errors->has('telephoneNumber') ? ' is-invalid' : '' }}" name="telephoneNumber" value="{{ old('telephoneNumber') }}" required autofocus>
                        @if ($errors->has('telephoneNumber'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('telephoneNumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-6">
                        <input placeholder="Nombre o Persona de Contacto*" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <input placeholder="Teléfono Celular*" id="cellphoneNumber" type="number" class="form-control{{ $errors->has('cellphoneNumber') ? ' is-invalid' : '' }}" name="cellphoneNumber" value="{{ old('cellphoneNumber') }}" required autofocus>

                        @if ($errors->has('cellphoneNumber'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cellphoneNumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input placeholder="Email (Persona de Contacto)*" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <input placeholder="Ciudad de Contacto*" id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                        @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input placeholder="RIF*" id="rif" type="text" class="form-control{{ $errors->has('rif') ? ' is-invalid' : '' }}" name="rif" required>

                        @if ($errors->has('rif'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('rif') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="col-md-6">
                      <select id="listen" class="form-control" name="listen" required>
                        <option>Escuchó de Nosotros Por?:*</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Página Web">Página Web</option>
                        <option value="Correo Electrónico">Correo Electrónico</option>
                        <option value="Cliente Referido">Cliente Referido</option>
                        <option value="Valla Publicitaria">Valla Publicitaria</option>
                        <option value="Otros">Otros</option>
                        <option value="Segurshow Victor Lemus">Segurshow Victor Lemus</option>
                        <option value="Segurshow Freyeri Labrador">Segurshow Freyeri Labrador</option>
                        <option value="Segurshow Manuel Rivero">Segurshow Manuel Rivero</option>
                        <option value="Segurshow Miguel Parra">Segurshow Miguel Parra</option>
                        <option value="Segurshow Gabriel Crescenzi">Segurshow Gabriel Crescenzi</option>
                        <option value="Segurshow Promotoras">Segurshow Promotoras</option>
                      </select>
                    </div>
                </div>
<br>
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-blue register-btn">
                            Regístrese
                        </button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script src="/js/script.js" defer></script>
    </body>
  </html>
