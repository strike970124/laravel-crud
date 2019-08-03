@if(auth()->user())
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #a1fbc6;">    
      <a class="navbar-brand" href="{{ url('/home')}}">Laravel Crud</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">          
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link active" href="{{ url('/admin/users')}}">Usuarios
            <span class="sr-only">(current)
              </span>
          </a>
        </li>
        
        
      </ul> 
          <div class="offset-md-4 col-md-2">    
            <div class="btn-group">
                <button type="button" class="btn btn-outline-ligth dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false"><span class="caret"><i class="fa fa-user"></i></span> {{ auth()->user()->name }} 
                </button>
                <div class="dropdown-menu">
                    
                  <a class="dropdown-item" href="{{route('admin.auth.logout') }}"><span class="caret"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Cerrar Sesion</span></a> 
                </div>                           
            </div>                 
</nav>
@endif
      
           
