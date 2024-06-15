<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <style>
            .activo a{
                color: red;
                text-decoration: underline;
            }
        </style>

        @stack('styles')

    </head>
    <body>
        
        {{-- <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="nosotros">Nosotros</a></li>
                <li><a href="servicios">Servicios</a></li>
                <li><a href="contacto">Contacto</a></li>
            </ul>
        </nav> --}}


        <nav>
            {{-- {{dump(request()->routeIs('home'))}} --}}
            <table class="table">
                {{-- <thead class="table table-bordered">
                    <tr>
                        <th scope="col" class="{{setActivo('home')}}"><a href="{{route('home')}}">Home</a></th>
                        <th scope="col" class="{{setActivo('nosotros')}}"><a href="nosotros">Nosotros</a></th>
                        <th scope="col" class="{{setActivo('servicios')}}"><a href="servicios">Servicios</a></th>
                        <th scope="col" class="{{setActivo('contacto')}}"><a href="contacto">Contacto</a></th>
                    </tr>
                </thead> --}}
                @include('partials.nav')
                
            </table>
            
        </nav>
        @yield('content')




        <footer class="text-center p-3" style="background-color: rgba(94, 90, 90, 0.2);">
            © 2024 Derechos Reservados:
            <a class="text-white" >villegas-codigo-laravel.com</a>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>