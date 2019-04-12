<div class="col-md-9">
  @if(session()->has('message'))<!--has message-->
    <div class="alert alert-success success-message">
        {{ session()->get('message') }}
    </div>
@endif<!--has message-->

<div class="row">
  <div class="col-md-4">
    <form action="/search/product/admin" method="post">
      @csrf
      <div class="form-group d-flex">
        <input type="text" name="search" placeholder="Buscar Productos..." class="form-control rounded-0"/>
        <button type="submit" name="button" class="btn btn-primary rounded-0">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Inventario</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Marcas:</th>
                            <th>Precio de Venta:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Wireplus+:</td>
                            <td>{{number_format($inventarioWireplus,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>Ledplus+:</td>
                            <td>{{number_format($inventarioLedplus,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>Metalnet:</td>
                            <td>{{number_format($inventarioMetalnet,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>RCG:</td>
                            <td>{{number_format($inventarioRCG,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>MVTEAM:</td>
                            <td>{{number_format($inventarioMVTEAM,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>NETVISION:</td>
                            <td>{{number_format($inventarioNETVISION,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>CAPITAL:</td>
                            <td>{{number_format($inventarioCAPITAL,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>ASG:</td>
                            <td>{{number_format($inventarioASG,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>3M:</td>
                            <td>{{number_format($inventario3M,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>ECOGREEN:</td>
                            <td>{{number_format($inventarioECOGREEN,2,'.', ',')}} USD</td>
                        </tr>
                        <tr>
                            <td>Total:</td>
                            <td>{{number_format($inventarioTotal,2,'.', ',')}} USD</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


  <table class="table admin-table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID:</th>
        <th colspan="2">Producto:</th>
        <th colspan="2">Modificar:</th>
        <th>USD</th>
        <th>Mayor</th>
        <th>SKU</th>
        <th>Categoría</th>
      </tr>
      </thead>
      <tbody>
      @forelse($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->title}}</td>
        <td><img src="{{$product->image}}" alt="{{$product->title}}" width="100px"/></td>
        <td><a href="/edit/product/{{$product->id}}" class="btn btn-success">Editar</a></td>
        <td><a href="/delete/product/{{$product->id}}" class="btn btn-danger">Eliminar</a></td>
        <td>{{number_format($product->ref,2,".",",")}}</td>
        <td>{{number_format($product->premium,2,".",",")}}</td>
        <td>{{$product->sku}}</td>
        <td>{{$product->category}}</td>
      </tr>
      @empty
      <tr>
        <td class="text-center" colspan="10">
          No hay productos agregados :c
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>



</div>
