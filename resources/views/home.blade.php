@extends('admin.template.main')
<title>Pagina Principal</title>
<link rel="shortcut icon" href="/images/icono.ico"/>

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Bienvenido</h1>
        <p class="lead">Esto es un Crud de Laravel</p>
      </div>
      
      <div class="container">
       
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="text-center">Lista de Usuarios</h4>
            </div>
            <div class="card-body">
              <h1 class="text-center">Informacion<small class="text-muted"></small></h1>
              <ul class="text-center">
                <li>En este Crud se pueden Crear usuarios</li>
                <li>Editar Usuarios</li>
                <li>Y eliminarlos </li>                
              </ul>
              <a href="{{ url('/admin/users')}}" class="btn btn-lg btn-block btn-success">Ver lista de Usuarios</a>
            </div>
          </div>          
        </div>
@endsection