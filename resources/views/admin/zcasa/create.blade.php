<!DOCTYPE html>
<html lang="en">

  <head>
    @include('layouts.admin.head')
    <title>Inserir Imóvel</title>
  </head>
  <body>
    <div class="container">
@include('layouts.admin.navbar')

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Inserir Casa</small>
</h1>

<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('home')}}">Admin</a>
        </li>
        <li class="breadcrumb-item active">Inserir Casa</li>
      </ol>
<!-- Content Row -->
<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3 mb-4">
        <div class="list-group">
            <a href="{{url('apartamento/inserir')}}" class="list-group-item">Apartamento</a>
            <a href="{{url('casa/inserir')}}" class="list-group-item active">Casa</a>
            <a href="{{url('terreno/inserir')}}" class="list-group-item">Terreno</a>
            <a href="{{url('rural/inserir')}}" class="list-group-item">Área Rural</a>
            <a href="{{url('comercial/inserir')}}" class="list-group-item">Salas/Pavilhões</a>
        </div>
    </div>
    <!-- Content Column -->
    <div class="col-lg-9 mb-4">
        <form name="imovel" id="imovel" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- IMPORTANTE AQUI!!! --}}
            <input type="hidden" name="discriminator" id="discriminator" value="casa">
            {{-- IMPORTANTE AQUI!!! --}}

            <div class="container">
                <h3>Casa</h3>
                @include('layouts.admin.inserir.1geral-inserir')

                {{-- CASA --}}

                <br><h5> Dados do Imóvel:</h5><br>
                    <div class="control-group form-group row">
                      <div class="controls col-md-6 mb-1">
                        <label for="areapv" class="form-label">Área da Casa:</label><br>
                        <input type="text" class="form-control" id="areapv" name="areapv" placeholder="Área da Casa">
                      </div>
                      <div class="controls col-md-6">
                        <label for="garagem" class="form-label">Vagas de Garagem:</label><br>
                        <select name="garagem" id="garagem" class="custom-select">
                          <option hidden="">Selecione:</option>
                          <option value="1">1 vagas</option>
                          <option value="2">2 vagas</option>
                          <option value="3">3 vagas</option>
                          <option value="4">4 vagas ou mais</option>
                        </select>
                      </div>
                    </div>

                    <div class="control-group form-group row">
                              <div class="controls col-md-6">
                            <label for="banheiros" class="form-label">Número de Banheiros:</label><br>
                            <select name="banheiros" id="banheiros" class="custom-select">
                              <option hidden="">Selecione:</option>
                              <option value="1">1 banheiro</option>
                              <option value="2">2 banheiros</option>
                              <option value="3">3 banheiros</option>
                              <option value="4">4 banheiros ou mais</option>
                            </select>
                          </div>
                      <div class="controls col-md-6">
                        <label for="quartos" class="form-label">Número de Quartos:</label><br>
                        <select name="quartos" id="quartos" class="custom-select">
                          <option hidden="">Selecione:</option>
                          <option value="1">1 quarto</option>
                          <option value="2">2 quartos</option>
                          <option value="3">3 quartos</option>
                          <option value="4">4 quartos ou mais</option>
                        </select>
                      </div>
                    </div>


                    <br><h5> Detalhes do Imóvel:</h5><br>
                    <div class="control-group form-group row">
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="jardim" name="jardim" value="t">
                          <label class="custom-control-label" for="jardim">Jardim</label>
                        </div>
                      </div>
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="churras" name="churras" value="t">
                          <label class="custom-control-label" for="churras">Churrasqueira</label>
                        </div>
                      </div>
                    </div>

                    <div class="control-group form-group row">
                      <div class="custom control custom checkbox mb-3 col-md-6">
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="mob" name="mob" value="t">
                          <label class="custom-control-label" for="mob">Mobília</label>
                        </div>
                      </div>
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="agua" name="agua" value="t">
                          <label class="custom-control-label" for="agua">Água Quente</label>
                        </div>
                      </div>
                    </div>

                    <div class="control-group form-group row">
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="cerca" name="cerca" value="t">
                          <label class="custom-control-label" for="cerca">Cercado</label>
                        </div>
                      </div>
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="lava" name="lava" value="t">
                          <label class="custom-control-label" for="lava">Lavanderia</label>
                        </div>
                      </div>
                    </div>

                    <div class="control-group form-group row">
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="quiosque" name="quiosque" value="t">
                          <label class="custom-control-label" for="quiosque">Quiosque</label>
                        </div>
                      </div>
                    </div>

                {{-- CASA --}}

                @include('layouts.admin.inserir.2geral-inserir')

              <!-- /.row -->

            </div>
            <!-- /.container -->
                @include('layouts.footer')
                @include('layouts.admin.scripts')

            <!-- Contact form JavaScript -->
            <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

          </body>

</html>
