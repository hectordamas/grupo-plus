<div class="col-md-9">
  @if(session()->has('message'))<!--has message-->
    <div class="alert alert-success success-message">
        {{ session()->get('message') }}
    </div>
@endif<!--has message-->
<div class="row">
  <div class="col-md-4">
    <form action="/search/users/admin" method="post">
      @csrf
      <div class="form-group d-flex">
        <input type="text" name="search" placeholder="Buscar Usuarios..." class="form-control rounded-0"/>
        <button type="submit" name="button" class="btn btn-primary rounded-0">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form>
  </div>
</div><!--row-->

  <table class="table admin-table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Nombre:</th>
        <th>Email:</th>
        <th>RIF | C.I</th>
        <th>Teléfonos</th>
        <th>Perfil</th>
        <th>Expiración:</th>
        <th>Vendedor</th>
        <th>Ultima conexion</th>
        <th>Eliminar:</th>
        <th>Editar:</th>
      </tr>
      </thead>
      <tbody>
      @forelse($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->rif}}</td>
        <td>{{$user->cellphoneNumber}} | {{$user->telephoneNumber}}</td>

        @if($user->role == 'admin')
        <td>Administrador</td>
        @else
        <td>Usuario</td>
        @endif

        @if($user->date_expiration)
        <td>{{ date_format (new DateTime($user->date_expiration), 'd/m/Y') }}</td>
        @else
        <td>No tiene Fecha de expiración</td>
        @endif
        
        <td>{{$user->name_seller}}</td>
        
        @if($user->last_login)
        <td>{{ date_format (new DateTime($user->last_login), 'd/m/Y h:i:s A') }}</td>
        @else
        <td>Desconocida</td>
        @endif

        @if($user->id === Auth::id())
          <td colspan="2">No puedes modicar tu propio usuario.</td>
        @else
          <td><a href="/delete/user/{{$user->id}}" class="btn btn-danger">Eliminar</a></td>
          <td><a href="/edit/user/{{$user->id}}" class="btn btn-success">Editar</a></td>
        @endif
      </tr>
      @empty
      <tr>
        <td class="text-center" colspan="8">
          No hay usuarios agregados :c
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>


</div>
