@extends('admin.template.main')
@section('title', 'Lista de Usuarios')
<link rel="shortcut icon" href="#"/>
@section('content')  
<br>
<div class="row">
<div class="offset-md-8 col-md-4">
    <a href="{{ route('users.create') }}" class="btn btn-success btn-block pull-right">Agregar un Usuario</a>
</div>
</div>
<br>
<table class="table table-striped" id="userTable">
    <thead>
        <th>ID</th>
        <th>Nombre</th>        
        <th>Email</th>
        <th>Tipo</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr data-id="{{ $user->id }}">
                <td> {{$user->id}} </td>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td>
                     @if($user->type == "admin")
                     <span class="badge badge-pill badge-primary">{{ $user->type }}</span>
                     @else
                     <span class="badge badge-pill badge-warning">{{ $user->type }}</span>
                     @endif
                </td>
                <td>
                    <button type="button" class="btn btn-danger fa fa-trash" id="deleteuser" data-target="#deleteuser"></button>
                        <a href=" {{ route('users.edit', $user->id)}}" class="btn btn-warning fa fa-edit"><span aria-hidden="true"></span>
                    </a>
                    <button type="button" class="btn btn-info fa fa-eye" id="showuser" data-target="#showuser"></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="text-center"> 
{{ $users->links('pagination::bootstrap-4') }} 
</div>


{{--inicio modal eliminar usuario--}}
<div class="modal fade" id="modaldeleteuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar {{$user->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                El usuario {{$user->name}} va a ser eliminado, ¿Esta Seguro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-delete" id="btn-delete" >Aceptar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
{{--fin modal eliminar usuario--}}
@endsection



{{--------------------------------------------------------------------------------------------}}

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#btn-delete').click(function () {
                var $this   = $(this),
                    $data   = $this.data(),
                    deleteUser =  'users/destroy',
                    $modal   = $('#modaldeleteuser')

                $.ajax({
                    url: deleteUser,
                    type: 'POST',
                    dataType: 'json',
                    data: $data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                }).done(function (data) {
                   if (data.estado == 1) {
                       $('#userTable').find('tr[data-id="'+$data.id+'"]').remove();
                   }
                    $modal.modal('hide');
                }).fail(function (hrx) {
                    /*SI NO FUNCIONA PONER UN MENSAJE .. PENDIENTE */
                });
            });

            $(document).on('click', '#deleteuser', function(){
               var $this    = $(this),
                   $tr      = $this.closest('tr'),
                   $modal   = $('#modaldeleteuser');

               $modal.find('#btn-delete').data('id', $tr.data('id') );
               $modal.modal('show');
            });
        });
    </script>

@endsection







