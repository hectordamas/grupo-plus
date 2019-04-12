@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    @include('admin.sidebar')
    <div class="col-md-9">
      @if(session()->has('message'))<!--has message-->
          <div class="alert alert-success success-message">
              {{ session()->get('message') }}
          </div>
      @endif<!--has message-->
      <div class="card">
        <div class="card-header">
          Subir Factura
        </div>
        <div class="card-body">
          <form action="/create/bills" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <div class="form-group col-md-3">
                <label for="RIF">RIF | C.I (Usar exactamente el mismo valor del correo del Pedido):</label>
                <input id="RIF" type="text" name="rif" class="form-control">
                @if ($errors->has('rif'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rif') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="billNumber">Número de Factura:</label>
                <input id="billNumber" type="number" name="billNumber" class="form-control"/>
                @if ($errors->has('billNumber'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('billNumber') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="imponibleBill">Base Imponible de Factura (Bs.F):</label>
                <input id="imponibleBill" type="number" name="imponibleBill" class="form-control"/>
                @if ($errors->has('imponibleBill'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('imponibleBill') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="iva">I.V.A:</label>
                <input id="iva" type="number" name="iva" class="form-control"/>
                @if ($errors->has('iva'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('iva') }}</strong>
                    </span>
                @endif
              </div>
            </div><!--row-->

            <div class="row">
              <div class="form-group col-md-3">
                <label for="total">Total:</label>
                <input id="total" type="number" name="total" class="form-control"/>
                @if ($errors->has('total'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('total') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="Status">Status:</label>
                <select id="Status" type="text" name="status" class="form-control">
                  <option value="">--------</option>
                  <option value="Pago Por Confirmar">Pago Por Confirmar</option>
                  <option value="Empaca">Empaca</option>
                  <option value="En Tránsito">En Tránsito</option>
                  <option value="Entregado">Entregado</option>
                </select>
                @if ($errors->has('status'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="destiny">Destino:</label>
                <input id="destiny" type="text" name="destiny" class="form-control"/>
                @if ($errors->has('destiny'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('destiny') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="date_send">Fecha de Envío</label>
                <input id="date_send" type="date" name="date_send" class="form-control"/>
                @if ($errors->has('date_send'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('date_send') }}</strong>
                    </span>
                @endif
              </div>
            </div><!--row-->

            <div class="row">
              <div class="form-group col-md-3">
                <label for="send_with">Enviado Con:</label>
                <input id="send_with" type="text" name="send_with" class="form-control"/>
                @if ($errors->has('send_with'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('send_with') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="cost_send">Costo de Envío:</label>
                <input id="cost_send" type="number" name="cost_send" class="form-control"/>
                @if ($errors->has('cost_send'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cost_send') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="percent_send">Porcentaje de Envío:</label>
                <input id="percent_send" type="number" name="percent_send" class="form-control"/>
                @if ($errors->has('percent_send'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('percent_send') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-3">
                <label for="status_flete">Estatus de Pago del Flete:</label>
                <input type="text" name="status_flete" id="status_flete" class="form-control">
                @if ($errors->has('status_flete'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('status_flete') }}</strong>
                    </span>
                @endif
              </div>
            </div><!--row-->

            <div class="row">
              <div class="form-group col-md-6">
                <label for="company_fact">Empresa que Factura:</label>
                <select class="form-control" id="company_fact" name="company_fact" class="form-control">
                  <option value="">-----</option>
                  <option value="ledplus">Ledplus</option>
                  <option value="wireplus">Wireplus</option>
                  <option value="secutronik">Secutronik</option>
                </select>
                @if ($errors->has('company_fact'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('company_fact') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group col-md-6">
                <label for="data_send">Datos del Envío:</label>
                <input type="text" name="data_send" id="data_send" class="form-control">
                @if ($errors->has('data_send'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('data_send') }}</strong>
                    </span>
                @endif
              </div>
            </div><!--row-->

            <div class="row">
              <div class="form-group col-md-6">
                <label for="pdf">Subir PDF:</label>
                <input id="pdf" type="file" name="pdf" class="form-control" accept="application/pdf"/>
                @if ($errors->has('pdf'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pdf') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="row" id="data-user-bill">

            </div><!--row-->

            <div class="row">
              <div class="form-group col-md-6">
                <input type="submit" class="btn btn-primary">
              </div>
            </div><!--row-->

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
