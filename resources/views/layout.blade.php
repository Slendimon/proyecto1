<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Proyecto 1 Testing CRUD</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <style>
    .up{
      margin-top: 40px;
    }
  </style>
</head>
<body>
<div class="flex-center position-ref full-height up">
  <div class="navbar">
      <a href="{{route('home')}} " class="btn ">Home</a>
  
    <div class="justify-content-end">
      
        <a href="{{ route ('socios.index') }}" class="btn btn-secondary ">Socios</a>

        <a href="{{ route ('fares.index') }}" class="btn btn-secondary ">Tarifas</a>
  
        <a href="{{ route ('stands.index') }}" class="btn btn-secondary ">Stands</a>
      
    </div>
  </div>
    
    <div class="container">
        @yield('content')  
    </div>
</div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>