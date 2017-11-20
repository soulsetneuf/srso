<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<strong
                        class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{Request::root()}}/desayunos">Desayunos</a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/almuerzos">Almuerzos</a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/especiales">Platos Especiales</a>
                    </li>
                </ul>

        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicio<strong
                        class="caret"></strong></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{Request::root()}}/gastronomia">Gastronomia</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{Request::root()}}/catering">Catering</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="{{Request::root()}}/informacion">Información</a>
        </li>
        <li>
            @if(Auth::check())
                <a href="{{Request::root()}}/contacto">Contacto</a>
            @else
                <a href="{{Request::root()}}/contacto/create">Contacto</a>
            @endif
        </li>
        <li>
            @if(Auth::check())
                <a href="{{Request::root()}}/cliente">Cliente</a>
            @else
                <a href="{{Request::root()}}/cliente/create">Cliente</a>
            @endif
        </li>
        <li>
            @if(Auth::check())
                <a href="{{Request::root()}}/reserva">Reservas</a>
            @else
                <a href="{{Request::root()}}/reserva/create">Reservas</a>
            @endif
        </li>
        <li>
            @if(Auth::check())
                <a href="#">Usuario: {{Auth::user()->name}}</a>
            @else
                <a href="{{Request::root()}}/login">Administrador</a>
            @endif
        </li>
        <li>
            @if(Auth::check())
                <a href="{{Request::root()}}/salir">Salir</a>
            @endif
        </li>
    </ul>
</div>