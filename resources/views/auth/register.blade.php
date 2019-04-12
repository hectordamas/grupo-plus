@extends('layouts.app')

@section('content')
<div class="container-fluid full-width">
    <div class="row">
      @if(session()->has('message'))<!--has message-->
        <div class="alert alert-success success-message">
            {{ session()->get('message') }}
        </div>
    @endif<!--has message-->

      @include('admin.sidebar')

      <div class="col-md-9">
          <div class="card">
              <div class="card-header">Completar proceso de registro</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <div class="form-group row">
                          <div class="col-md-6">
                            <label for="companyName" class="col-form-label text-md-right">Nombre de la Empresa *</label>
                              <input id="companyName" type="text" class="form-control{{ $errors->has('companyName') ? ' is-invalid' : '' }}" name="companyName" value="{{ old('companyName') }}" required autofocus>
                              @if ($errors->has('companyName'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('companyName') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="col-md-6">
                            <label for="telephoneNumber" class="col-form-label text-md-right">Teléfono Fijo *</label>
                              <input id="telephoneNumber" type="number" class="form-control{{ $errors->has('telephoneNumber') ? ' is-invalid' : '' }}" name="telephoneNumber" value="{{ old('telephoneNumber') }}" required autofocus>
                              @if ($errors->has('telephoneNumber'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('telephoneNumber') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6">
                            <label for="address_fact" class="col-form-label text-md-right">Dirección de Facturación *</label>
                              <input id="address_fact" type="text" class="form-control{{ $errors->has('address_fact') ? ' is-invalid' : '' }}" name="address_fact" value="{{ old('address_fact') }}" required autofocus>
                              @if ($errors->has('address_fact'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('address_fact') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="col-md-6">
                            <label for="address_send" class="col-form-label text-md-right">Dirección de Envío *</label>
                              <input id="address_send" type="text" class="form-control{{ $errors->has('address_send') ? ' is-invalid' : '' }}" name="address_send" value="{{ old('address_send') }}" required autofocus>
                              @if ($errors->has('address_send'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('address_send') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6">
                            <label for="password" class="col-form-label text-md-right">Contraseña *</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="col-md-6">
                            <label for="password_confirmation" class="col-form-label text-md-right">Confirmar Contraseña *</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                              @if ($errors->has('password_confirmation'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6">
                            <label for="name" class="col-form-label text-md-right">Persona de Contacto *</label>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                              @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="col-md-6">
                            <label for="cellphoneNumber" class="col-form-label text-md-right">Teléfono Celular *</label>
                              <input id="cellphoneNumber" type="number" class="form-control{{ $errors->has('cellphoneNumber') ? ' is-invalid' : '' }}" name="cellphoneNumber" value="{{ old('cellphoneNumber') }}" required autofocus>

                              @if ($errors->has('cellphoneNumber'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('cellphoneNumber') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6">
                              <label for="email" class="col-form-label text-md-right">Email Persona de Contacto *</label>
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="col-md-6">
                            <label for="city" class="col-form-label text-md-right">Ciudad de Contacto *</label>
                              <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                              @if ($errors->has('city'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('city') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6">
                            <label for="role" class="col-form-label text-md-right">Perfil o Rol *</label>
                            <select id="role" class="form-control" name="role">
                              <option value="">Usuario</option>
                              <option value="admin">Administrador</option>
                            </select>
                          </div>

                          <div class="col-md-6">
                            <label for="rif" class="col-form-label text-md-right">RIF | Cédula*</label>
                              <input id="rif" type="text" class="form-control{{ $errors->has('rif') ? ' is-invalid' : '' }}" name="rif" value="{{ old('rif') }}" required autofocus>

                              @if ($errors->has('rif'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('rif') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-6">
                          <label for="date_expiration" class="col-form-label text-md-right">Fecha de Vencimiento del Rol</label>
                            <input id="date_expiration" type="date" class="form-control{{ $errors->has('date_expiration') ? ' is-invalid' : '' }}" name="date_expiration" value="{{ old('date_expiration') }}" autofocus>

                            @if ($errors->has('date_expirationdate_expiration'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date_expiration') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                          <label for="email_seller" class="col-form-label text-md-right">Correo del Vendedor Asignado</label>
                            <input id="email_seller" type="email" class="form-control{{ $errors->has('email_seller') ? ' is-invalid' : '' }}" name="email_seller" value="{{ old('email_seller') }}" autofocus>

                            @if ($errors->has('email_seller'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email_seller') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                      
                      <div class="form-group row">
                          <div class="col-md-6">
                            <label for="name_seller" class="col-form-label text-md-right">Nombre del Vendedor</label>
                            <input id="name_seller" type="text" class="form-control{{ $errors->has('name_seller') ? ' is-invalid' : '' }}" name="name_seller" value="{{ old('name_seller') }}" autofocus>

                            @if ($errors->has('name_seller'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name_seller') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>


                      <div class="form-group row mb-0">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">
                                  Regístrese
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
