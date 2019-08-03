@extends('admin.template.main')
<title>Pagina Principal</title>
<link rel="shortcut icon" href="#>


@section('content')


<div class="card text-center">
        <div class="card-header">
        <h1>Bienvenido!</h1>
        </div>
        <div class="card-body">
          <h5 class="card-title">Por favor Inicia sesion para continuar</h5>
          <a href="{{route('admin.auth.login')}}" class="btn btn-success">Iniciar Sesion</a>         
        </div>        
      </div>
@endsection      