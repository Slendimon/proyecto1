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
          <td>Nombres</td>
          <td>cargo</td>
          <td>habilitado</td>
          <td>descripcion</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($socios as $socio)
        <tr>
            <td>{{$socio->id}}</td>
            <td>{{$socio->nombre}}, {{$socio->apellido_p}} {{$socio->apellido_m}} </td>
            <td>{{$socio->cargo}}</td>
            <td>{{$socio->habilitado}}</td>
            <td>{{$socio->descripcion}}</td>
            <td><a href="{{ route('socios.edit',$socio->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('socios.destroy', $socio->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection