<div class="col-md-8">
    @if(session()->has('message'))<!--has message-->
        <div class="alert alert-success success-message">
            {{ session()->get('message') }}
        </div>
    @endif<!--has message-->
      <div class="card">

        <div class="card-header">Editar Producto</div>
        <div class="card-body">

          <form action="/product/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <div class="col-md-12">
                <p>Imagen Actual</p>
                <img src="{{$product->image}}" width="100" alt="{{$product->title}}"/>
              </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                  <label for="image" class="col-form-label">Edita la Imagen del producto*</label>
                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{$product->image}}" autofocus accept="image/*">
                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-6">
                  <label for="title" class="col-form-label">Título del Producto*</label>
                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $product->title }}" autofocus>
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div><!--form group-->


            <div class="form-group row">
                <div class="col-md-12">
                  <label for="details" class="col-form-label">Detalles | Descripción del Producto*</label>
                    <textarea rows="8" id="details" class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}" name="details" value="{{ old('details') }}"  autofocus>
                      {!!$product->details!!}
                    </textarea>
                    @if ($errors->has('details'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('details') }}</strong>
                        </span>
                    @endif
                </div>
            </div><!--form group-->


            <div class="form-group row">
              <div class="col-md-4">
                <label for="company" class="col-form-label">Registrar | Seleccionar Empresa *</label>
                <select id="company" class="selectTwo" name="company">
                  <option selected value="{{$product->company}}">{{$product->company}}</option>
                  <option value="ledplus">Ledplus</option>
                    <option value="ECOGREEN">ECOGREEN</option>
                  <option value="wireplus">Wireplus</option>
                
                  <option value="metalnet">Metalnet</option>
                  <option value="RCG">RCG</option>
                    <option value="MVTEAM">MVTEAM</option>
                    <option value="NETVISION">NETVISION</option>
                    <option value="CAPITAL">CAPITAL</option>
                    <option value="ASG">ASG</option>
                    <option value="3M">3M</option>
                </select>
              </div>
              
                <div class="col-md-4">
                  <label for="brand" class="col-form-label">Registrar | Seleccionar Marcas </label>
                  <select id="brand" class="selectTwo" name="brand">
                    <option selected value="{{$product->brand}}">{{$product->brand}}</option>
                    <option value="emt">Tubería EMT y Accesorios</option>
                    <option value="tech">Techrol</option>
                    <option value="cerco">Cerco Eléctrico</option>
                    <option value="metalnet">Metalnet</option>
                    
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="category" class="col-form-label">Registrar | Seleccionar Categoría </label>
                  <select id="category" class="selectTwo" name="category">
                    <option selected value="{{$product->category}}">{{$product->category}}</option>
                        <option value="cables">Cables</option>
                    <option value="conectores">Conectores</option>
                    <option value="computacion">Computación</option>

                    <option value="baterias">Baterias</option>
                 
                    <option value="rack-wireplus">Rack Wireplus</option>
                    <option value="rack">Rack Metalnet</option>
                    <option value="bandejas-wireplus">Bandejas Wireplus</option>
                    <option value="bandejas">Bandejas Metalnet</option>
                    <option value="cerco-electrico">Cerco Eléctrico</option>
                    <option value="tubos">Tubos</option>
                    <option value="paneles-led">Páneles Led</option>
                    <option value="bombillos">Bombillos</option>
                    <option value="reflectores">Reflectores</option>
                    <option value="cintas-led">Cintas Led</option>
                    <option value="drivers">Drivers</option>
                    <option value="redes">Accesorios para Redes</option>
                    <option value="herramientas">Herramientas</option>
                    <option value="cctv">CCTV</option>
                    <option value="botas">Botas</option>
                    <option value="chaleco">Chaleco</option>
                    <option value="guantes">Guantes</option>
                    <option value="impermeables">Impermeables</option>
                    <option value="lentes">Lentes</option>
                    <option value="mascarillas">Mascarillas</option>
                    <option value="proteccion-auditiva">Protección Auditiva</option>
                    <option value="cablesn">Cables Netvisión</option>
                    <option value="camaras">Cámaras</option>
                    <option value="dvr">DVR</option>
                    <option value="cerco-electrico1">Cerco Electrico1</option>
                    <option value="motores">Motores</option>
                    <option value="tomas-y-switches">Tomas y Switches</option>
                  </select>
                </div>
            </div><!--form group-->

            <div class="form-group row">
                <div class="col-md-6">
                  <label for="ref" class="col-form-label">Oferta en USD (Se puede dejar vacío y cargar los datos del Saint)</label>
                    <input id="ref" type="number" class="form-control{{ $errors->has('ref') ? ' is-invalid' : '' }}" name="ref" value="{{$product->ref }}" autofocus>
                    @if ($errors->has('ref'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ref') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-6">
                  <label for="regular" class="col-form-label">Precio Al Detal (Se puede dejar vacío y cargar los datos del Saint)</label>
                    <input id="regular" type="number" class="form-control{{ $errors->has('regular') ? ' is-invalid' : '' }}" name="regular" value="{{ $product->regular }}" autofocus>
                    @if ($errors->has('regular'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('regular') }}</strong>
                        </span>
                    @endif
                </div>
            </div><!--form group-->

            <div class="form-group row">
                <div class="col-md-6">
                  <label for="premium" class="col-form-label">Precio Al Mayor (Se puede dejar vacío y cargar los datos del Saint)</label>
                    <input id="premium" type="number" class="form-control{{ $errors->has('premium') ? ' is-invalid' : '' }}" name="premium" value="{{ $product->premium }}" autofocus>
                    @if ($errors->has('premium'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('premium') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-6">
                  <label for="stock" class="col-form-label">Disponibilidad (Se puede dejar vacío y cargar los datos del Saint)</label>
                    <input id="stock" type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="{{ $product->stock }}" autofocus>
                    @if ($errors->has('stock'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('stock') }}</strong>
                        </span>
                    @endif
                </div>
            </div><!--form group-->


            <div class="form-group row">
                <div class="col-md-6">
                  <label for="sku" class="col-form-label">SKU (Usar para cargar los datos del Saint)</label>
                    <input id="sku" type="text" class="form-control{{ $errors->has('sku') ? ' is-invalid' : '' }}" name="sku" value="{{ $product->sku }}" autofocus>
                    @if ($errors->has('sku'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sku') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-6">
                  <label for="position" class="col-form-label">Posición</label>
                    <input id="position" type="number" min="0" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ $product->position }}" autofocus>
                    @if ($errors->has('position'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('position') }}</strong>
                        </span>
                    @endif
                </div>
            </div><!--form group-->

            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                      Actualizar Producto
                    </button>
                </div>
            </div><!--form-group-->
          </form>

        </div><!--Card body-->

      </div><!--CARD-->
    </div><!--col-->
