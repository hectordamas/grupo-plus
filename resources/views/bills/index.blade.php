@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
      @include('bills.nav')
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">

      <div class="row">
        <div class="col-md-4">
          <form action="/search/bills" method="post">
            @csrf
            <div class="form-group d-flex">
              <input type="text" name="search" placeholder="Buscar Facturas..." class="form-control rounded-0"/>
              <button type="submit" name="button" class="btn btn-primary rounded-0">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div><!--row-->


      <div class="row">
        <div class="col-md-12">
              <table class="table admin-table table-striped table-bordered" style="font-size:14px;">
                <thead class="table-dark">
                  <th>Fecha Status</th>
                  <th>N°</th>
                  <th>Cliente</th>
                  <th>Nombre del Cliente</th>
                  <th>RIF</th>
                  <th>Base Imponible de Factura</th>
                  <th>I.V.A</th>
                  <th>Total:</th>
                  <th>Estatus</th>
                  <th>Destino</th>
                  <th>Fecha de Envío</th>
                  <th>Enviado Con:</th>
                  <th>Costo de Envío</th>
                  <th>Porcentaje de Envío</th>
                  <th>Estatus del pago del flete</th>
                  <th>Datos del Envío</th>
                  <th>PDF</th>
                  <th>Retención</th>
                  <th>Editar</th>
                </thead>
                <tbody>

                  <tr>
                    <td colspan="19" style="text-align:center; font-size:20px;">Wireplus</td>
                  </tr>

              @foreach($bills as $bill)
                @if($bill->company_fact == 'wireplus')
                  <tr>
                    <td>{{date_format($bill->created_at, 'd/m/Y')}}</td>
                    <td>{{$bill->billNumber}}</td>
                    <td>{{$bill->user->companyName}}</td>
                    <td>{{$bill->user->name}}</td>
                    <td>{{$bill->user->rif}}</td>
                    <td>{{number_format($bill->imponibleBill, 2,',','.')}} Bs.S</td>
                    <td>{{number_format($bill->iva, 2,',','.')}} Bs.S</td>
                    <td>{{number_format($bill->total, 2,',','.')}} Bs.S</td>
                    <td>{{$bill->status}}</td>
                    <td>{{$bill->destiny}}</td>
                    <td>{{date_format(new DateTime($bill->date_send), 'd/m/Y')}}</td>
                    <td>{{$bill->send_with}}</td>
                    <td>{{number_format($bill->cost_send, 2,',','.')}} Bs.S</td>
                    <td>{{$bill->percent_send}} %</td>
                    <td>{{$bill->status_flete}}</td>
                    <td>{{$bill->data_send}}</td>
                    <td><a href="{{$bill->pdf}}" target="_blank">Leer Más</a></td>
                    <td><a href="{{$bill->retention}}" target="_blank">Leer Más</a></td>
                    <td><a href="/edit/bill/{{$bill->id}}" class="btn btn-success">Editar</a></td>
                  </tr>
                @endif
              @endforeach
              <tr>
                <td colspan="19" style="text-align:center; font-size:20px;">Ledplus</td>
              </tr>
              @foreach($bills as $bill)
              @if($bill->company_fact == 'ledplus')
                <tr>
                  <td>{{date_format($bill->created_at, 'd/m/Y')}}</td>
                  <td>{{$bill->billNumber}}</td>
                  <td>{{$bill->user->companyName}}</td>
                  <td>{{$bill->user->name}}</td>
                  <td>{{$bill->user->rif}}</td>
                  <td>{{number_format($bill->imponibleBill, 2,',','.')}} Bs.S</td>
                  <td>{{number_format($bill->iva,2,',','.')}} Bs.S</td>
                  <td>{{number_format($bill->total,2,',','.')}} Bs.S</td>
                  <td>{{$bill->status}}</td>
                  <td>{{$bill->destiny}}</td>
                  <td>{{date_format(new DateTime($bill->date_send), 'd/m/Y')}}</td>
                  <td>{{$bill->send_with}}</td>
                  <td>{{number_format($bill->cost_send,2,',','.')}} Bs.S</td>
                  <td>{{$bill->percent_send}} %</td>
                  <td>{{$bill->status_flete}}</td>
                  <td>{{$bill->data_send}}</td>
                  <td><a href="{{$bill->pdf}}" target="_blank">Leer Más</a></td>
                  <td><a href="{{$bill->retention}}" target="_blank">Leer Más</a></td>
                  <td><a href="/edit/bill/{{$bill->id}}" class="btn btn-success">Editar</a></td>
                </tr>
              @endif
              @endforeach


                </tbody>

              </table>
        </div>
      </div><!--row-->



    </div>
  </div>
</div>
@endsection
