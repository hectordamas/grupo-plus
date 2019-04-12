@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="alert alert-success">
          Su pedido ha sido enviado correctamente, pronto nos pondremos en contacto con usted
        </div>


      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Página Principal</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gestión de Pedido</li>
        </ol>
      </nav>

      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Gestión de Pedido</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th colspan="4" class="text-center">
                Pedido
              </th>
            </thead>
            <tbody>
              <tr>
                <td>N° de Pedido</td>
                <td>Precio Nacional</td>
                <td>Precio Internacional</td>
                <td></td>
              </tr>
              <tr>
                <td>{{$order->id}}</td>
                <td>{{number_format($order->premium,2,",",".")}} Bs.S</td>
                <td>{{number_format($order->ref,2,".",",")}} USD</td>
                <td><a href="/download/{{$order->id}}" class="btn btn-primary">Descargar Pedido</a></td>
              </tr>
            </tbody>
          </table>



        </div>
      </div><!--card-->

    </div><!--col-->
  </div><!--row-->
</div><!--container-->
@endsection
