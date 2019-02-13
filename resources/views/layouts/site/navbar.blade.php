
<!-- Navigation -->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top cor-audibert">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"> <img src="/images/imagesite/logo_audibert.png" class="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Página Inicial</a>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVendas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vendas
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownVendas">
                        <a class="dropdown-item" href="{{url('/apartamento/vendas')}}">Apartamento</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('casa/vendas')}}">Casa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('terreno/vendas')}}">Terreno</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('rural/vendas')}}">Área Rural</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('comercial/vendas')}}">Salas/Pavilhões</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('quemsomos')}}">Quem Somos</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                    @auth
                    <a class="nav-link" href="{{ url('/home') }}">{{Auth::user()->name}} - Admin</a>
                    @endauth
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
