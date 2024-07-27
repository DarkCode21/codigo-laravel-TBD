<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{setActivo('home')}}"><a href="{{route('home')}}">Home</a></th>
        <th scope="col" class="{{setActivo('nosotros')}}"><a href="{{route('nosotros')}}">Nosotros</a></th>
        {{-- <th scope="col" class="{{setActivo('servicios')}}"><a href="{{route('servicios')}}">Servicios</a></th> --}}
        <th scope="col" class="{{setActivo('servicios')}}"><a href="{{route('servicios.index')}}">Servicios</a></th>

        <th scope="col" class="{{setActivo('personas')}}"><a href="{{route('personas.index')}}">Personas</a></th>
        <th scope="col" class="{{setActivo('contacto')}}"><a href="{{route('contacto')}}">Contacto</a></th>

        @guest
            <th scope="col"><a href="{{route('login')}}">Login</a></th>
        
            @else
            <th scope="col">
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>
            </th>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest

    </tr>
</thead>