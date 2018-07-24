<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Ecomonedas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Centros de Acopio</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Materiales de Reciclaje</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Acerca de</a>
            </li>

        </ul>
    </div>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li><a class="nav-link" href="#">{{ __('Login') }}</a></li>
            <li><a class="nav-link" href="#">{{ __('Register') }}</a></li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <a class="nav-link dropdown-toggle" href="#"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="#" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                </div>
            </li>
        @endguest
    </ul>
</nav>
