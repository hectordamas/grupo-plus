@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
    @if(session()->has('message'))<!--has message-->
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
      @endif<!--has message-->
      <div class="ajax-response">

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
          <table class="table admin-table table-bordered">
            <thead>
              <th>Producto:</th>
              <th>Costo Unitario (USD)</th>
              <th>Costo Unitario (Bs.S)</th>
              <th>Cantidad</th>
              <th>Total (USD)</th>
              <th>Total (Bs.S)</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'wireplus')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en Wireplus:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalWireplus">{{number_format($totalWireplus,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="wireplusPremium">{{number_format($wireplusPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'ledplus')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center" style="font-size:18px;"><strong>Total en Ledplus:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalLedplus">{{number_format($totalLedplus,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="ledplusPremium">{{number_format($ledplusPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
                @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'metalnet')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en Metalnet:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalmetalnet">{{number_format($totalmetalnet,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="metalnetPremium">{{number_format($totalmetalnetPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
            <!--@foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'pkcell')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en Pkcell:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalpkcell">{{number_format($totalpkcell,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="pkcellPremium">{{number_format($totalpkcellPremium,2,",",".")}}</td>
                <td></td>
              </tr>-->
              
                @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'RCG')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en RCG:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalRCG">{{number_format($totalRCG,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="RCGPremium">{{number_format($totalRCGPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
                        
            @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'MVTEAM')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en MVTEAM:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalMVTEAM">{{number_format($totalMVTEAM,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="MVTEAMPremium">{{number_format($totalMVTEAMPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
            @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'CAPITAL')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en CAPITAL:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalCAPITAL">{{number_format($totalCAPITAL,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="CAPITALPremium">{{number_format($totalCAPITALPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
            @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'NETVISION')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en NETVISION:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalNETVISION">{{number_format($totalNETVISION,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="NETVISIONPremium">{{number_format($totalNETVISIONPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
            @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'ASG')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en ASG:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalASG">{{number_format($totalASG,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="ASGPremium">{{number_format($totalASGPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
              
             @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == 'ECOGREEN')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en ECOGREEN:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalECOGREEN">{{number_format($totalECOGREEN,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="ECOGREENPremium">{{number_format($totalECOGREENPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
            @foreach($cartItems as $cartItem)
                @if($cartItem->options["company"] == '3M')
                <tr id="rowId{{$cartItem->rowId}}">
                  <td>{!!$cartItem->name!!}</td>
                  <td>{{number_format($cartItem->price,2,".",",")}}</td>
                  <td>{{number_format($cartItem->options["premium"],2,",",".")}}</td>
                  <td id="qty{{$cartItem->rowId}}">
                    <div class="d-flex">
                      <input class="form-control rounded-0 update-cart"
                      type="number" placeholder="Cantidad" name="qty" value="{{$cartItem->qty}}" id="qty-input{{$cartItem->rowId}}" data-id="{{$cartItem->rowId}}"/>
                    </div>
                  </td>
                  <td class="multiqty{{$cartItem->rowId}}">{{number_format($cartItem->price * $cartItem->qty, 2, ".", ",") }}</td>
                  <td class="multiqtyPremium{{$cartItem->rowId}}">{{number_format($cartItem->options["premium"] * $cartItem->qty, 2, ",", ".") }}</td>
                  <td><button class="btn btn-danger btn-remove-cart" data-id="{{$cartItem->rowId}}">x</button></td>
                </tr>
                @endif
              @endforeach
              <tr>
                <td class="text-center"style="font-size:18px;"><strong>Total en 3M:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="total3M">{{number_format($total3M,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="3MPremium">{{number_format($total3MPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
              <tr>
                <td class="text-center" style="font-size:18px;"><strong>Base Imponible:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="subtotal">{{number_format($subtotal,2,",",".")}}</td>
                <td class="text-center"style="font-size:18px;" id="subtotalPremium">{{number_format($subtotalPremium,2,",",".")}}</td>
                <td></td>
              </tr>
            <tr>
                <td class="text-center" style="font-size:18px;"><strong>IVA (16%):</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="iva">{{number_format($iva,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="ivaPremium">{{number_format($ivaPremium,2,",",".")}}</td>
                <td></td>
              </tr>
              
            <tr>
                <td class="text-center" style="font-size:18px;"><strong>Total:</strong></td>
                <td colspan="3"></td>
                <td class="text-center" style="font-size:18px;" id="totalReal">{{number_format($totalReal,2,".",",")}}</td>
                <td class="text-center"style="font-size:18px;" id="totalRealPremium">{{number_format($totalRealPremium,2,",",".")}}</td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <div class="row">
            <div class="col-md-5 d-flex">
            @if(Cart::count() > 0)
            <div>
             <form action="/cart/mail" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary" id="Pedido">Enviar Pedido</button>
              </form>
            </div>
            <div class="ml-2">
                <form >
                <a class="btn btn-primary" href="/">Seguir Comprando</a>
              </form>
            </div>
            @endif
            </div><!--col-->

            <div class="col-md-7">
              <div class="alert-cart">
              </div><!--alert-cart-->
            </div>
          </div><!--row-->

        </div>
      </div><!--card-->

    </div><!--col-->
  </div><!--row-->
</div><!--container-->
@endsection
