<!DOCTYPE html>
<html lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
  </head>
  <body style="font-family:sans-serif;">
    <!--Productos-->
    <h2>Pedido {{$order_id}}</h2>
    <table border="1" cellpadding="10">
      <thead>
        <th>Producto:</th>
        <th>Precio:</th>
        <th>Precio Nacional:</th>
        <th>Cantidad:</th>
        <th>SKU</th>
      </thead>
      <tbody>
      @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'wireplus')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en Wireplus:</strong></td>
        <td>{!! number_format($totalWireplus,2,".",",") !!} $</td>
        <td>{!! number_format($wireplusPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>

      @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'ledplus')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",") !!}$</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".") }} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en Ledplus:</strong></td>
        <td>{!! number_format($totalLedplus,2,".",",") !!} $</td>
        <td>{!! number_format($ledplusPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
        @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'metalnet')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en Metalnet:</strong></td>
        <td>{!! number_format($totalmetalnet,2,".",",") !!} $</td>
        <td>{!! number_format($totalmetalnetPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
     <!--   @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'pkcell')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en Pkcell:</strong></td>
        <td>{!! number_format($totalpkcell,2,".",",") !!} $</td>
        <td>{!! number_format($totalpkcellPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>-->
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'RCG')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en RCG:</strong></td>
        <td>{!! number_format($totalRCG,2,".",",") !!} $</td>
        <td>{!! number_format($totalRCGPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'MVTEAM')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en MVTEAM:</strong></td>
        <td>{!! number_format($totalMVTEAM,2,".",",") !!} $</td>
        <td>{!! number_format($totalMVTEAMPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'NETVISION')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en NETVISION:</strong></td>
        <td>{!! number_format($totalNETVISION,2,".",",") !!} $</td>
        <td>{!! number_format($totalNETVISIONPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'CAPITAL')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en CAPITAL:</strong></td>
        <td>{!! number_format($totalCAPITAL,2,".",",") !!} $</td>
        <td>{!! number_format($totalCAPITALPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'ASG')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en ASG:</strong></td>
        <td>{!! number_format($totalASG,2,".",",") !!} $</td>
        <td>{!! number_format($totalASGPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'ECOGREEN')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en ECOGREEN:</strong></td>
        <td>{!! number_format($totalECOGREEN,2,".",",") !!} $</td>
        <td>{!! number_format($totalECOGREENPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'HIKVISION')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en HIKVISION:</strong></td>
        <td>{!! number_format($totalHIKVISION,2,".",",") !!} $</td>
        <td>{!! number_format($totalHIKVISIONPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
        @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == 'CHUANGO')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en CHUANGO:</strong></td>
        <td>{!! number_format($totalCHUANGO,2,".",",") !!} $</td>
        <td>{!! number_format($totalCHUANGOPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    @foreach($cartItems as $cartItem)
        @if($cartItem->options["company"] == '3M')
          <tr>
            <td>{!!$cartItem->name!!}</td>
            <td>{!! number_format($cartItem->price,2,".",",")!!} $</td>
            <td>{{number_format($cartItem->options['premium'],2,",",".")}} Bs.S</td>
            <td>{!!$cartItem->qty!!}</td>
            <td>{!!$cartItem->options["sku"]!!}</td>
          </tr>
        @endif
      @endforeach
      <tr>
        <td><strong>Total en 3M:</strong></td>
        <td>{!! number_format($total3M,2,".",",") !!} $</td>
        <td>{!! number_format($total3MPremium,2,",",".") !!} Bs.S</td>
        <td></td>
      </tr>
      
    <tr>
        <td><strong>Base Imponible:</strong></td>
        <td>{!! number_format($subtotal,2,".",",") !!} $</td>
        <td>{!! number_format($subtotalPremium,2,",",".") !!} Bs.S</td>
        <td></td>
        <td></td>
      </tr>
      
        <tr>
        <td><strong>IVA:</strong></td>
        <td>{!! number_format($iva,2,".",",") !!} $</td>
        <td>{!! number_format($ivaPremium,2,",",".") !!} Bs.S</td>
        <td></td>
        <td></td>
      </tr>
      
      <tr>
        <td><strong>Total + IVA:</strong></td>
        <td>{{ number_format($totalReal,2,".",",") }} $</td>
        <td>{!! number_format($totalRealPremium,2,",",".") !!} Bs.S</td>
        <td></td>
        <td></td>
      </tr>
      </tbody>
    </table>
<br>
<!--Usuario-->
<h2>Usuario del Pedido</h2>
<table border="1" cellpadding="10">
  <thead>
    <th>ID:</th>
    <th>Nombre de la Empresa</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>RIF</th>
    <th>Teléfonos</th>
    <th>Dirección de envio</th>
    <th>Dirección de Facturación</th>
    <th>Ciudad de Contacto</th>
    <th>Nombre del Vendedor</th>
  </thead>
  <tbody>
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->companyName}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->rif}}</td>
    <td>{{$user->cellphoneNumber}} | {{$user->telephoneNumber}}</td>
    <td>{{$user->address_send}}</td>
    <td>{{$user->address_fact}}</td>
    <td>{{$user->city}}</td>
    <td>{{$user->name_seller}}</td>
    </tr>
  </tbody>
</table>


  </body>
</html>
