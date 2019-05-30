@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Tarifa
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
      <form method="post" action="{{ route('fares.update', $fare->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Descripcion:</label>
          <input type="text" class="form-control" name="descripcion" value={{ $fare->descripcion }} />
        </div>
        <div class="form-group">
          <label for="price">Monto :</label>
          <input type="text" class="form-control" name="costo" value={{ $fare->costo }} />
        </div>
  
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection
