<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>@yield('title') | Administration</title>
</head>

<body>
    
@php
    $route = request()->route()->getName();
@endphp

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route('admin.property.index')}}" @class(['nav-link', 'active' => str_contains($route,'property.')])> properties</a>
          </li>
          <li class="nav-item">
            <a  href="{{route('admin.option.index')}}" @class(['nav-link', 'active' => str_contains($route,'option.')])>Options</a>
          </li>
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              @method('delete')
              <button class="nav-link">Se déconnecter</button>
            </form>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link</a></li>
              <li><a class="dropdown-item" href="#">Another link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        @yield('content')    
    </div>
</body>
</html>