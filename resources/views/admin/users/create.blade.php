@extends('admin.template.main')
@section('title', 'Crear Usuario') 
<link rel="shortcut icon" href="#"/>  
@section('content')

@if(count($errors))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif
<br>
<br>
<div class="card text-left">
     <div class="card-header">
          Formulario de Registro        
    </div>
<div class="card-body">
{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
<div class="form-group">    
    {!! Form::label('name','Nombre') !!}    
    {!! Form::text('name', null, ['class' => 'form-control' ,'placeholder' => 'Nombre Completo', 'required']) !!}    
</div>

<div class="form-group">    
    {!! Form::label('email','Correo Electronico') !!}    
    {!! Form::email('email', null, ['class' => 'form-control' ,'placeholder' => 'Example@example.com', 'required']) !!}    
</div>

<div class="from-group">
    {!! Form::label('password','Contraseña') !!}    
    {!! Form::password('password', ['class' => 'form-control' ,'placeholder' => 'Contraseña', 'required']) !!}    
</div>

<div class="form-group"> 
    <hr>  
<center> {!! Form::submit('Registrar Usuario', ['class' => 'btn btn-success']) !!} |
        <a href="{{ url('/admin/users')}}" class="btn btn-danger">Regresar</a> </center>
</div>

{!! Form::close() !!} 
</div>
    <div class="card-footer text-muted">
    Laravel Crud 
    </div>
</div>    

@endsection




          
         
       



