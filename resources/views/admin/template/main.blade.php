<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @yield('title') Laravel Crud
        </title>
    <link rel="stylesheet" href="{{ asset ('plugins/bootstrap/css/bootstrap.css') }} ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
    <body>
        @include('admin.template.partial.nav')
        @include('flash::message')
            <section class="container">
                @yield('content')
            </section>
        <script src="{{ asset ('plugins/jquery/jquery.js') }}"></script>
        <script src="{{ asset ('plugins/bootstrap/js/bootstrap.js') }}"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>        
        @yield('scripts')           

    </body>
</html>