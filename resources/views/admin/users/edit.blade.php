@extends('admin.template.main')
@section('title', 'Editar Usuario'  .$user->name )
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
     <div class="card-header">Editar Usuario {{$user->name}} </div>
        <div class="card-body">
    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

<div class="form-group">    
    {!! Form::label('name','Nombre') !!}    
    {!! Form::text('name', $user->name, ['class' => 'form-control' ,'placeholder' => 'Nombre Completo', 'required']) !!}    
</div>

<div class="form-group">    
    {!! Form::label('email','Correo Electronico') !!}    
    {!! Form::email('email', $user->email, ['class' => 'form-control' ,'placeholder' => 'Example@example.com', 'required']) !!}    
</div>

<div class="form-group"> 
    <hr>  
<center> {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-success']) !!}     |
        <a href="{{ url('/admin/users')}}" class="btn btn-danger">Regresar</a> </center>
</div>

{!! Form::close() !!} 
</div>
    <div class="card-footer text-muted">
    Softnet SAS - 2019
    </div>
</div>    

@endsection
