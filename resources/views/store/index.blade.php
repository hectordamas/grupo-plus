@extends('layouts.app')
@section('content')


<div class="container-fluid full-width" style="background: rgb(241, 241, 241);">


  <div class="row store-row" style="">
    <div class="col-md-9 store-column" >
  <div class="menu-store sticky-top" style="background:white; padding:20px; margin-bottom:20px; box-shadow: 2px 6px 11px -10px rgba(0,0,0,1);">
        <div class="row">
            <div class="col-md-2 dropdown" style="margin-top:20px;">
                <a href="/company/wireplus" class="Grid-Item card dropdown-btn">
                <img src="/img/WIREPLUS.png" class="card-img-top">
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
            <a href="/category/computacion">Computación</a>
            <a href="/category/herramientas">Herramientas</a>
            <a href="/category/rack-wireplus">Rack Wireplus</a>
            <a href="/category/tubos">Tubos</a>
          </div>
        </div>

        <div class="col-md-2 dropdown" style="margin-top:20px;">
         <a href="/company/ledplus" class="Grid-Item card dropdown-btn">
            <img src="{{ asset('img/LEDPLUS.png') }}" alt="" class="card-img-top"/>
          </a>
        <div class="dropdown-content">
            <a href="/company/ledplus" class="text-center"><strong>Todo en Ledplus+</strong></a>
            <a href="/category/bombillos">Bombillos</a>
            <a href="/category/cintas-led">Cintas Led</a>
            <a href="/category/drivers">Drivers</a>
            <a href="/category/paneles-led">Paneles Led</a>
            <a href="/category/reflectores">Reflectores Led</a>
            <a href="/category/tomas-y-switches">Tomas y Switches</a>
          </div>
        </div>
        
        <div class="col-md-2 dropdown" style="margin-top:20px;">
         <a href="/company/ECOGREEN" class="Grid-Item card dropdown-btn">
            <img src="{{ asset('img/LOGO_ECOGREEN.png') }}" alt="" class="card-img-top"/>
          </a>
            <div class="dropdown-content">
                <a href="/company/ECOGREEN" class="text-center"><strong>Todo en Ecogreen</strong></a>
            </div>
        </div>

        



     <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/RCG" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/RCG.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/RCG" class="text-center"><strong>Todo en Rcg</strong></a>
           
          </div>
        </div>

    <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/MVTEAM" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/MVTEAM.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/MVTEAM" class="text-center"><strong>Todo en Mvteam</strong></a>
                     </div>
        </div>

    <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/NETVISION" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/NETVISION.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/NETVISION" class="text-center"><strong>Todo en Netvision</strong></a>
            
          </div>
        </div>
        
            <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/CAPITAL" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/CAPITAL.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/CAPITAL" class="text-center"><strong>Todo en Capital</strong></a>
            <a href="/category/botas">Botas</a>
            <a href="/category/chaleco">Chalecos</a>
            <a href="/category/guantes">Guantes</a>
            <a href="/category/impermeables">Impermeables</a>
            <a href="/category/lentes">Lentes</a>
            <a href="/category/mascarillas">Mascarillas</a>
            <a href="/category/proteccion-auditiva">Protección Auditiva</a>
          </div>
        </div>
        
        <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/ASG" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/asglogo.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/ASG" class="text-center"><strong>Todo en Asg</strong></a>
            </div>
        </div>
        
        <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/3M" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/3M.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/3M" class="text-center"><strong>Todo en 3M</strong></a>
            </div>
        </div>
        
        <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/HIKVISION" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/LOGOHIKVISION.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/HIKVISION" class="text-center"><strong>Todo en Hikvision</strong></a>
            </div>
        </div>
        
         <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/CHUANGO" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/CHUANGO.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/CHAUNGO" class="text-center"><strong>Todo en Chuango</strong></a>
            </div>
        </div>
        
        <div class="col-md-2 dropdown" style="margin-top:20px;">
            <a href="/company/metalnet" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/METALNET.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/metalnet" class="text-center"><strong>Todo en Metalnet</strong></a>
          </div>
        </div>
        
        
        </div>
    </div>




    <div class="row" style="margin-bottom:20px;">
        <div class="col-md-12 text-center">
             <strong>PRECIOS NO INCLUYEN IVA</strong></a><br><br>
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
  <!-- 
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
    </div>-->
    
    <div class="row">
        <div class="col-md-4">
            <strong>RCG:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalRCG">{{number_format($totalRCG,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="RCGPremium">{{number_format($totalRCGPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>

    <div id="RCGCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'RCG')
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
            <strong>MVTEAM:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalMVTEAM">{{number_format($totalMVTEAM,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="MVTEAMPremium">{{number_format($totalMVTEAMPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>

    <div id="MVTEAMCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'MVTEAM')
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
            <strong>NETVISION:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalNETVISION">{{number_format($totalNETVISION,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="NETVISIONPremium">{{number_format($totalNETVISIONPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>

    <div id="NETVISIONCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'NETVISION')
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
            <strong>CAPITAL:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalCAPITAL">{{number_format($totalCAPITAL,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="CAPITALPremium">{{number_format($totalCAPITALPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="CAPITALCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'CAPITAL')
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
            <strong>ASG:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalASG">{{number_format($totalASG,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="ASGPremium">{{number_format($totalASGPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="ASGCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'ASG')
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
            <strong>ECOGREEN:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalECOGREEN">{{number_format($totalECOGREEN,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="ECOGREENPremium">{{number_format($totalECOGREENPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="ECOGREENCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'ECOGREEN')
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
            <strong>CHUANGO:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalCHUANGO">{{number_format($totalCHUANGO,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="CHUANGOPremium">{{number_format($totalCHUANGOPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="CHUANGOCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'CHUANGO')
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
            <strong>HIKVISION:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="totalHIKVISION">{{number_format($totalHIKVISION,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="HIKVISIONPremium">{{number_format($totalHIKVISIONPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="HIKVISIONCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == 'HIKVISION')
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
            <strong>3M:</strong>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="total3M">{{number_format($total3M,2,".",",")}} USD</span>
        </div>
        <div class="col-md-4">
            <span class="badge badge-cyan" id="3MPremium">{{number_format($total3MPremium,2,",",".")}} Bs.S</span>
        </div>
    </div>
    <div id="3MCartList" class="row">
        <div class="col-md-12 inside">
        @foreach($cartItems as $cartItem)
          @if($cartItem->options["company"] == '3M')
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
