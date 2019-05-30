@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Stand
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
      <form method="post" action="{{ route('stands.update', $stand->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Seccion:</label>
          <input type="text" class="form-control" name="letra" value={{ $stand->letra }} />
        </div>
        <div class="form-group">
          <label for="price">Numero :</label>
          <input type="text" class="form-control" name="numero" value={{ $stand->numero }} />
        </div>
        <div class="form-group">
          <label for="quantity">Padron:</label>
          <input type="text" class="form-control" name="padron" value={{ $stand->padron }} />
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection