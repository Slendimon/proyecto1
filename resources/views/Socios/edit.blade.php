@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Socio
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('socios.update', $socio->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Apellido Paterno:</label>
          <input type="text" class="form-control" name="apellido_p" value={{ $socio->apellido_p }} />
        </div>
        <div class="form-group">
            <label for="name">Apellido Materno:</label>
            <input type="text" class="form-control" name="apellido_m" value={{ $socio->apellido_m }} />
        </div>
        <div class="form-group">
            <label for="name">Nombres:</label>
            <input type="text" class="form-control" name="nombre" value={{ $socio->nombre }} />
        </div>
        <div class="form-group">
            <label for="cargo">Cargo :</label>
            <select name="cargo" class="form-control" >
                <option value="Titular" {{ $socio->cargo == 'Titular' ? 'selected' : '' }}>Titular</option>
                <option value="Hijo" {{ $socio->cargo == 'Hijo' ? 'selected' : '' }}>Hijo</option>
                <option value="Conyugue"{{ $socio->cargo == 'Conyugue' ? 'selected' : '' }}>Conyugue</option>
            </select>
        </div>
        <div class="form-group">
            <label for="habilitado">Estado</label>
            <div class="radio">
            <label>
                <input type="radio" name="habilitado" value="1" {{ $socio->habilitado == 1 ? 'checked' : '' }}>
                Habilitado
            </label>
            </div>
            <div class="radio">
            <label>
                <input type="radio" name="habilitado" value="0" {{ $socio->habilitado == 0 ? 'checked' : '' }}>
                Deshabilitado
            </label>
            </div>
        
        </div>

            <div class="form-group">
                <label for="price">Observacion:</label>
                <textarea name="descripcion" cols="50" rows="5">{{ $socio->descripcion}}</textarea>
            </div>

        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection