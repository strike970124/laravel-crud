@extends('admin.template.main')
<title>Iniciar Sesion </title>
<link rel="shortcut icon" href="/images/icono.ico" />
<br>
@section('content') 
<div class="text-center">            
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Bienvenido!</h1>
            <p class="lead">Por Favor inicia Sesion para Continuar...</p>
        </div>
    <div class="body">
        <div class="offset-md-4 col-md-4">                 
            {!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email' ,['class' => 'text']) !!}
                {!! Form::email('email',null,['class' => 'form-control', 'placeholder' => 'Example@example.com']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Ingresar', ['class' => 'btn btn-success btn-block ']) !!}
            </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
