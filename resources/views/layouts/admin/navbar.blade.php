
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
                            <a class="nav-link" href="{{url('home')}}">Admin</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInserir" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Inserir
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownInserir">
                              <a class="dropdown-item" href="{{url('apartamento/inserir')}}">Apartamento</a>
                              <a class="dropdown-item" href="{{url('casa/inserir')}}">Casa</a>
                              <a class="dropdown-item" href="{{url('terreno/inserir')}}">Terreno</a>
                              <a class="dropdown-item" href="{{url('rural/inserir')}}">Área Rural</a>
                              <a class="dropdown-item" href="{{url('comercial/inserir')}}">Salas/Pavilhões</a>
                            </div>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('visualizar')}}">Visualizar</a>
                        </li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                      </ul>
                    </div>
                  </div>
                </nav>
