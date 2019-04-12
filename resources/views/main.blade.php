@extends('layouts.app')
@section('content')
<div class="container-fluid full-width">

    <div class="another-container">
        
      <h2 class="text-center">Elabora tu pedido aquí, seleciona las marcas de tu preferencia:</h2>
      <br>
    <div class="Grid-Layout">
        <div class="dropdown" style="margin-top:30px;">
          <a href="/company/wireplus" class="Grid-Item card dropdown-btn">
            <img src="{{ asset('img/WIREPLUS.png') }}" alt="" class="card-img-top"/>
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

        <div class="dropdown" style="margin-top:20px;">
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
        
        <div class="dropdown" style="margin-top:20px;">
         <a href="/company/ECOGREEN" class="Grid-Item card dropdown-btn">
            <img src="{{ asset('img/LOGO_ECOGREEN.png') }}" alt="" class="card-img-top"/>
          </a>
            <div class="dropdown-content">
            <a href="/company/ECOGREEN" class="text-center"><strong>Todo en Ecogreen</strong></a>
          </div>
        </div>

        <div class="dropdown">
            <a href="/company/metalnet" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/METALNET.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/metalnet" class="text-center"><strong>Todo en Metalnet</strong></a>
          </div>
        </div>

     <div class="dropdown">
            <a href="/company/RCG" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/RCG.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/RCG" class="text-center"><strong>Todo en Rcg</strong></a>
         
          </div>
        </div>

    <div class="dropdown">
            <a href="/company/MVTEAM" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/MVTEAM.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/MVTEAM" class="text-center"><strong>Todo en Mvteam</strong></a>
                     </div>
        </div>

    <div class="dropdown">
            <a href="/company/NETVISION" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/NETVISION.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/NETVISION" class="text-center"><strong>Todo en Netvision</strong></a>
          
          </div>
        </div>
        
            <div class="dropdown">
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
        
        <div class="dropdown">
            <a href="/company/3M" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/3M.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/3M" class="text-center"><strong>Todo en 3M</strong></a>
            
         
          </div>
        </div>
        
        <div class="dropdown">
            <a href="/company/ASG" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/asglogo.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/ASG" class="text-center"><strong>Todo en Asg</strong></a>
            
         
          </div>
        </div>
        
        <div class="dropdown">
            <a href="/company/HIKVISION" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/LOGOHIKVISION.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/HIKVISION" class="text-center"><strong>Todo en Hikvision</strong></a>
            
         
          </div>
        </div>
        
        <div class="dropdown">
            <a href="/company/CHUANGO" class="Grid-Item card dropdown-btn">
                <img src="{{ asset('img/CHUANGO.png') }}" alt="" class="card-img-top"/>
            </a>
            <div class="dropdown-content">
            <a href="/company/CHUANGO" class="text-center"><strong>Todo en Chuango</strong></a>
            </div>
        </div>
    </div>

    
    
    
   
   
 </div>
  
<div class="row">
    <div class="col-md-12">
      <div class="jumbotron" style="height:30vh; display:flex; justify-content:center; align-items:center; background:url({{ asset('img/fondo_GrupoPlus.jpg') }});">
        <div class="title">
          <h1 class="text-center marcas-representadas">Marcas Representadas</h1>
        </div><!--title-->
      </div><!--jumbotron-->
    </div><!--col-->
  </div><!--row-->
  
</div>

@endsection
