
        <!-- Navigation -->

                <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top cor-audibert">
                  <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}">Página Inicial</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('vendas')}}">Vendas</a>
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
