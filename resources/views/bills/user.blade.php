@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(session()->has('message'))<!--has message-->
          <div class="alert alert-success success-message">
              {{ session()->get('message') }}
          </div>
      @endif<!--has message-->
      <div class="card">
        <div class="card-header">
          Facturas:
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered admin-table">
            <thead>
              <th>N°</th>
              <th>Descargar</th>
              <th>Fecha:</th>
              <th>Subir Retención</th>
              <th>Ver Retención</th>
              <th>Estatus</th>
              <th>Datos del Envío</th>
            </thead>
            <tbody>
              @forelse($bills as $bill)
              <tr>
                <td>
                  {{$bill->billNumber}}
                </td>
                <td class="text-center" style="vertical-align: middle;">
                  <a href="{{$bill->pdf}}" target="_blank">
                    <i class="far fa-file-pdf" style="font-size:50px;"></i>
                  </a>
                </td>
                <td>
                  {{ date_format($bill->created_at, 'd/m/Y') }}
                </td>
                <td>
                  <form action="/retention/{{$bill->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input type="file" name="file" value="{{$bill->retention}}" accept="application/pdf">
                    </div>
                    <input type="submit" value="Subir" class="btn btn-primary">
                  </form>
                </td>

                  @if($bill->retention)
                    <td class="text-center" style="vertical-align: middle;">
                    <a href="{{$bill->retention}}" target="_blank">
                      <i class="far fa-file-pdf" style="font-size:50px;"></i>
                    </a>
                    </td>
                  @else
                  <td class="text-center" style="vertical-align: middle;">
                    No tienes ninguna retención asociada a esta factura
                    </a>
                  @endif

                <td>
                  {{$bill->status}}
                </td>
                <td>
                  {{$bill->data_send}}
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="7" class="text-center">
                  No tienes ninguna factura asociada a tu usuario.
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div><!--card body-->
      </div>
    </div>
  </div>
</div>
@endsection
