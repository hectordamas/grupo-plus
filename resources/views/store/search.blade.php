@extends('layouts.app')
@section('content')


<div class="container-fluid full-width" style="background: rgb(241, 241, 241);">


  <div class="row store-row" style="">
    <div class="col-md-9 store-column" >

    <div class="menu-store sticky-top" style="background:white; padding:20px; margin-bottom:20px; box-shadow: 2px 6px 11px -10px rgba(0,0,0,1);">
        <div class="row">
            <div class="col-md-3 dropdown">
                <a href="/company/wireplus">
                <img src="/img/wireplus_logo.png" width="90%">
                </a>

        <div class="dropdown-content">
            <a href="/company/wireplus" class="text-center"><strong>Todo en Wireplus+</strong></a>
            <a href="/category/redes">Accesorios para Redes</a>
            <a href="/category/bandejas-wireplus">Bandejas Wireplus</a>
            <a href="/category/baterias">Baterias</a>
            <a href="/category/cables">Cables</a>
            <a href="/category/cctv">CCTV</a>
            <a href="/category/cerco-electrico">Cerco Eléctrico</a>
            <a href="/category/conectores">Conectores</a>
            <a href="/category/herramientas">Herramientas</a>
            <a href="/category/rack-wireplus">Rack Wireplus</a>
            <a href="/category/tubos">Tubos</a>
            </div>
            </div>

            <div class="col-md-3 dropdown">
                <a href="/company/ledplus">
                <img src="/img/ledplus_logo.png" width="90%">
                </a>
            <div class="dropdown-content">
            <a href="/company/ledplus" class="text-center"><strong>Todo en Ledplus+</strong></a>
            <a href="/category/bombillos">Bombillos</a>
            <a href="/category/cintas-led">Cintas Led</a>
            <a href="/category/drivers">Drivers</a>
            <a href="/category/paneles-led">Paneles Led</a>
            <a href="/category/reflectores">Reflectores Led</a>
          </div>
        </div>

         <div class="col-md-3 dropdown">
                <a href="/company/pkcell">
                <img src="/img/pkcell_logo.png" width="90%" style="margin-top:10px;">
                </a>
            <div class="dropdown-content">
            <a href="/company/pkcell" class="text-center"><strong>Todo en Pkcell</strong></a>
            <a href="/category/pilas">Pilas</a>
                      </div>
        </div>

            <div class="col-md-3 dropdown">
                <a href="/company/metalnet">
                <img src="/img/metalnet.jpg" width="70%">
                </a>
            <div class="dropdown-content">
            <a href="/company/metalnet" class="text-center"><strong>Todo en Metalnet</strong></a>
            <a href="/category/bandejas">Bandejas Metalnet</a>
            <a href="/category/rack">Rack Metalnet</a>
          </div>
          </div>

        </div>
    </div>



    <div class="row" style="margin-bottom:20px;">
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="/products/pdf/{{$variable}}"><i class="far fa-file-pdf" style="font-size:20px;"></i>  Lista de Precios</a>
        </div>
    </div>

      <div class="row justify-content-center">
      @forelse($products as $product)
            <div class="card margin-bottom-20 card-producto">
              <a href="#" class="btnModal" data-id="{{$product->id}}">
                <img class="card-img-top" height="300px" src="{{$product->image}}" alt="{{$product->title}}"/>
              </a>
              <div class="card-body d-flex justify-content-center">

                <table style="width:100%;">
                   <thead>
                        <tr>
                            <th colspan="2">
                            <h5 class="card-title text-center">{!!$product->title!!}</h5>
                            </th>
                        </tr>
                    </thead>
                  <tbody style="font-size:13.2px;">
                    <tr>
                      <td><strong>Precio Internacional:</strong></td>
                      <td style="text-align:right;">{{number_format($product->ref,2,",",".")}} $</td>
                    </tr>
                    <tr>
                      <td><strong>Precio Nacional:</strong></td>
                      <td style="text-align:right;">{{number_format($product->premium,2,",",".")}} Bs.S</td>
                    </tr>
                    <tr>
                      <td><strong>Disponibilidad:</strong></td>
                      <td style="text-align:right;">{{$product->stock}}</td>
                    </tr>
                    @if($product->stock > 0)
                    <tr>
                      <td colspan="2">
                        <div class="d-flex form-store" style="justify-content:center;">
                            <input type="number" min="0" class="form-control rounded-0 input-store" placeholder="Cantidad..."  id="input-qty{{$product->id}}"/>
                            <button class="btn btn-primary btn-add rounded-0  btn-store" data-id="{{$product->id}}">Añadir</button>
                        </div>
                      </td>
                    </tr>
                    @else
                    <tr>
                      <td colspan="2">
                        <div class="d-flex form-store" style="justify-content:center;">
                            <input disabled type="text" class="form-control rounded-0 input-store" placeholder="Producto en Tránsito"/>
                        </div>
                      </td>
                    </tr>
                    @endif
                  </tbody>
                </table>
            </div><!--card-->

            <div class="modal-container modal-container{{$product->id}}" data-id="{{$product->id}}">
                <div class="modal-content">
                    <p>{!!$product->details!!}</p>
                </div>
            </div>
    </div><!--col--->


        @empty
      <h3 class="text-center">No hay ningún producto que mostrar aún</h3>
      @endforelse
    </div><!--row-->
  </div><!--col-->









<div class="col-md-3">
    <div class="carro-bar sticky-top" style="background-image:url('/img/background-store.jpg'); height:99vh; overflow-y:auto; color:white; padding:20px;">

    <div class="row">
    <div class="col-md-12">
     <div class="cart-container" style="display:flex; justify-content:center;">
        <div class="cart" style="padding:20px;">
          <i class="fas fa-shopping-cart" style="font-size:50px;"></i>
          <span style="font-size:50px;" id="badge" >{{ Cart::count() }}</span>
        </div>
      </div><!--cart container-->
    </div>
    </div><!--Row-->

    <div class="row">
        <div class="col-md-4">
            <strong>Wireplus+:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalWireplus">{{number_format($totalWireplus,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="wireplusPremium">{{number_format($wireplusPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="wireplusCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'wireplus')
          <div class="row">
            <div class="col-md-12">
                {{$cartItem->name}} x{{$cartItem->qty}}
            </div>
          </div>
          @endif
        @endforeach
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <strong>Ledplus+:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalLedplus">{{number_format($totalLedplus,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="ledplusPremium">{{number_format($ledplusPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="ledplusCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'ledplus')
          <div class="row">
            <div class="col-md-12">
                {{$cartItem->name}} x{{$cartItem->qty}}
            </div>
          </div>
          @endif
        @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <strong>Metalnet:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalmetalnet">{{number_format($totalmetalnet,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="metalnetPremium">{{number_format($totalmetalnetPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="metalnetCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'metalnet')
          <div class="row">
            <div class="col-md-12">
                {{$cartItem->name}} x{{$cartItem->qty}}
            </div>
          </div>
          @endif
        @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <strong>Pkcell:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalpkcell">{{number_format($totalpkcell,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="pkcellPremium">{{number_format($totalpkcellPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>

    <div id="pkcellCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'pkcell')
          <div class="row">
            <div class="col-md-12">
                {{$cartItem->name}} x{{$cartItem->qty}}
            </div>
          </div>
          @endif
        @endforeach
        </div>
    </div>

    <div class="row" style="margin-top:15px; margin-bottom:15px; border:1px solid white; padding-top:5px; padding-bottom:5px;">
        <div class="col-md-4">
            <strong>Total + IVA:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="total">{{ number_format($totalReal,2,".",",") }} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalPremium">{{ number_format($totalRealPremium,2,",",".") }} Bs.S</span>
        </div>
    </div>

    <div class="row">
            <a href="/cart" class="btn btn-cart ml-2">Confirmar</a>
            <a href="/cart" class="btn btn-cart ml-2">Modificar</a>
            <a href="/cart/destroy" class="btn btn-cart ml-2">Eliminar</a>
    </div>

    </div>
</div>

















  </div><!--row-->




</div><!--container-->
@endsection
