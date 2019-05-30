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
          <td>Seccion</td>
          <td>Numero</td>
          <td>Padron</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($stands as $stand)
        <tr>
            <td>{{$stand->id}}</td>
            <td>{{$stand->letra}}</td>
            <td>{{$stand->numero}}</td>
            <td>{{$stand->padron}}</td>
            <td><a href="{{ route('stands.edit',$stand->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('stands.destroy', $stand->id)}}" method="post">
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