@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Agregar socio
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
    <form method="post" action="{{ route('socios.store') }}">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    @csrf
                    <label for="name">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="apellido_p"/>
                </div>
                <div class="form-group">
                    <label for="name">Apellido Materno:</label>
                    <input type="text" class="form-control" name="apellido_m"/>
                </div>
                <div class="form-group">
                
                    <label for="name">Nombres:</label>
                    <input type="text" class="form-control" name="nombre"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cargo">Cargo :</label>
                    <select name="cargo" class="form-control">
                        <option value="">Seleeciona un cargo</option>
                        <option value="Titular">Titular</option>
                        <option value="Hijo">Hijo</option>
                        <option value="Conyugue">Conyugue</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="habilitado">Estado</label>
                        <div class="radio">
                        <label>
                            <input type="radio" name="habilitado" value="1">
                            Habilitado
                        </label>
                        </div>
                        <div class="radio">
                        <label>
                            <input type="radio" name="habilitado" value="0">
                            Deshabilitado
                        </label>
                        </div>
                    
                    </div>
        
                    <div class="form-group">
                        <label for="price">Observacion:</label>
                        <textarea name="descripcion" cols="50" rows="5"></textarea>
                    </div>
                    <div class="">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
            </div>    
                
            
        </div>
    </form>
  </div>
</div>
@endsection