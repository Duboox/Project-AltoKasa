<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <img alt="image" class="img-circle user-avatar" src="{{ user_avatar() }}">
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> 
                            <span class="block m-t-xs"> 
                                <strong class="font-bold">{{ user_name() }}</strong>
                             </span> 
                            <span class="text-muted text-xs block">
                                {{ user_level() }} <b class="caret"></b>
                            </span> 
                        </span> 
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <a href="{{ route('perfil.index') }}">Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <li>
                                <a href="#" href="{{ route('logout') }}" class="logout">
                                    Cerrar sesión
                                </a>
                            </li>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </ul>
                </div>
            </li>
            <li {{ setActive('home') }}>
                <a href="{{ route('home') }}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">Home</span>
                </a>
            </li>
            @role('head')
            <li>
                <a href="#">
                    <i class="fa fa-lock"></i> 
                    <span class="nav-label">Roles</span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('roles.index') }}">Roles</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('permissions.index') }}">Permisos</a>
                    </li> --}}
                </ul>
            </li>
            <li {{ setActive('users') }}>
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="nav-label">Usuarios</span>
                    <span class="label label-warning pull-right">{{ $users }}</span>
                </a>
            </li>
            @endrole
            <li {{ setActive('propierty') }}>
                <a href="#">
                    <i class="fa fa-lock"></i> 
                    <span class="nav-label">Propiedades</span>
                    <span class="label label-info pull-right">{{ $propiertys }}</span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('owner.index') }}">Propietarios</a>
                    </li>
                    <!-- <li>
                        <a href="{{ route('city.index') }}">Ciudades</a>
                    </li> -->
                    <li>
                        <a href="{{ route('area.index') }}">Áreas</a>
                    </li>
                    <li>
                        <a href="{{ route('propierty.index') }}">Propiedades</a>
                    </li>
                      <li>
                        <a href="{{ route('type-propierty.index') }}">Tipo de Propiedad</a>
                    </li>
                      <li>
                        <a href="{{ route('type-operation.index') }}">Tipo de Operación</a>
                    </li>
                     <li>
                        <a href="{{ route('photos.index') }}">Galeria de Imágenes</a>
                    </li>
                    <li>
                        <a href="{{ route('google.maps') }}">Google Maps API</a>
                    </li>
                    <li>
                        <a href="{{ route('tags.index') }}">Etiquetas</a>
                    </li>
                </ul>
            </li>
            <li {{ setActive('client') }}>
                <a href="#">
                    <i class="fa fa-building"></i> 
                    <span class="nav-label">Agenda</span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('client.index') }}">Clientes</a>
                    </li>
                    <li>
                        <a href="{{ route('notification.index') }}">Notificaciones</a>
                    </li>

                    </li>
                </ul>
            </li>
            @role('head')
            <li {{ setActive('web') }}>
                <a href="#">
                    <i class="fa fa-globe"></i> 
                    <span class="nav-label">Website</span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('social.index') }}">Redes Sociales</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery.index') }}">Galeria</a>
                    </li>
                </ul>
            </li>
            @endrole
        </ul>
    </div>
</nav>