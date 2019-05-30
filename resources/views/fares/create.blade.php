@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="row">
    <div class="card uper">
        <div class="card-header">
            Agregar Tarifa
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
            <form method="post" action="{{ route('fares.store') }}">
                
                
                <div class="form-group">
                    @csrf
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion"/>
                </div>
                <div class="form-group">
                    <label for="Costo">Monto :</label>
                    <input type="text" class="form-control" name="costo"/>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button> 
            </form>
        </div> 
    </div>
</div>
@endsection