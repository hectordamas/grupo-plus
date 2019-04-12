<!DOCTYPE html>
<html lang="es">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
  </head>
  <style>
    table{
      font-family: sans-serif;
    }
  </style>
  <body>
    <h1 style="text-align:center; font-family:sans-serif;">Lista de Precios ( {{$variable}} )</h1>
    <table border="1">
      <thead>
        <tr>
          <th>Producto:</th>
          <th></th>
          <th>Precio Internacional:</th>
          <th>Precio Nacional:</th>
          <th>Disponibilidad:</th>
          <th>SKU:</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{!! $product->title !!}</td>
          <td>
            @if(substr($product->image, 0, 7) === "http://")
              <img src="{{$product->image}}" width="100px"/>
            @else
              <img src="{{ asset($product->image) }}" width="100px"/>
            @endif
          </td>
          <td>{{ number_format($product->ref,2,".",",") }} USD</td>
          <td>{{ number_format($product->premium,2,",",".") }} Bs.S</td>
          <td>{{ $product->stock }}</td>
          <td>{{ $product->sku }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
