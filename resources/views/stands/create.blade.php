@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Agregar Stand
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
      <form method="post" action="{{ route('stands.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Seccion:</label>
              <input type="text" class="form-control" name="letra"/>
          </div>
          <div class="form-group">
              <label for="price">Numero :</label>
              <input type="text" class="form-control" name="numero"/>
          </div>
          <div class="form-group">
              <label for="quantity">Padron:</label>
              <input type="text" class="form-control" name="padron"/>
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
  </div>
</div>
@endsection