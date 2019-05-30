@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Descripcion</td>
          <td>Monto</td>
          <td colspan="2">Accion</td>
        </tr>
    </thead>
    <tbody>
        @foreach($fares as $fare)
        <tr>
            <td>{{$fare->id}}</td>
            <td>{{$fare->descripcion}}</td>
            <td>{{$fare->costo}}</td>
            <td><a href="{{ route('fares.edit',$fare->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('fares.destroy', $fare->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{route('fares.create')}} " class="btn btn-secondary">Crear Tarifa</a>
<div>
@endsection