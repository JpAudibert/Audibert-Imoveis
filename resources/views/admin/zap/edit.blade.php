<!DOCTYPE html>
<html lang="en">

  <head>
    @include('layouts.admin.head')
    <title>Alterar Imóvel</title>
  </head>
  <body>

        <!-- Navigation -->
        <div class="container">
        @include('layouts.admin.navbar')
        <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Alterar Apartamento</small>
          </h1>

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('home')}}">Admin</a>
            </li>
            <li class="breadcrumb-item active">Alterar Apartamento</li>
          </ol>
            <!-- Content Row -->
          <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-3 mb-4">
              <div class="list-group">
                    <a href="{{url('apartamento/inserir')}}" class="list-group-item active">Apartamento</a>
                    <a href="{{url('casa/inserir')}}" class="list-group-item">Casa</a>
                    <a href="{{url('terreno/inserir')}}" class="list-group-item">Terreno</a>
                    <a href="{{url('rural/inserir')}}" class="list-group-item">Área Rural</a>
                    <a href="{{url('comercial/inserir')}}" class="list-group-item">Salas/Pavilhões</a>
              </div>
            </div>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
              <form name="imovel" id="imovel" action="{{route('update', Illuminate\Support\Facades\Crypt::encryptString($id))}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Apartamento</h3>
            @include('layouts.admin.alterar.1geral-alterar')

            {{-- APARTAMENTO --}}

            <br><h5> Dados do Imóvel:</h5><br>
            <div class="control-group form-group row">
              <div class="controls col-md-6 mb-1">
                <label for="areapv" class="form-label">Área Privativa:</label><br>
              <input type="text" class="form-control" id="areapv" name="areapv" placeholder="Área Privativa do Imóvel" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" value="{{$imovel->areapv}}">
              </div>
              <div class="controls col-md-6">
                <label for="garagem" class="form-label">Vagas de Garagem:</label><br>
                <select name="garagem" id="garagem" class="custom-select">
                  <option hidden="">Selecione:</option>
                  <option value="0" @if($imovel->garagem==0) echo selected @endif>Sem garagem</option>
                  <option value="1" @if($imovel->garagem==1) echo selected @endif>1 vagas</option>
                  <option value="2" @if($imovel->garagem==2) echo selected @endif>2 vagas</option>
                  <option value="3" @if($imovel->garagem==3) echo selected @endif>3 vagas</option>
                  <option value="4" @if($imovel->garagem==4) echo selected @endif>4 vagas ou mais</option>
                </select>
              </div>
            </div>

            <div class="control-group form-group row">
              <div class="custom control custom radio col-md-6">
              <label for="banheiros" class="form-label">Número de Banheiros:</label><br>
                <select name="banheiros" id="banheiros" class="custom-select">
                  <option hidden="">Selecione:</option>
                  <option value="1" @if($imovel->banheiros==1) echo selected @endif>1 banheiro</option>
                  <option value="2" @if($imovel->banheiros==2) echo selected @endif>2 banheiros</option>
                  <option value="3" @if($imovel->banheiros==3) echo selected @endif>3 banheiros</option>
                  <option value="4" @if($imovel->banheiros==4) echo selected @endif>4 banheiros ou mais</option>
                </select>
              </div>
              <div class="controls col-md-6">
                <label for="quartos" class="form-label">Número de Quartos:</label><br>
                <select name="quartos" id="quartos" class="custom-select">
                  <option hidden="">Selecione:</option>
                  <option value="1" @if($imovel->quartos==1) echo selected @endif>1 quarto</option>
                  <option value="2" @if($imovel->quartos==2) echo selected @endif>2 quartos</option>
                  <option value="3" @if($imovel->quartos==3) echo selected @endif>3 quartos</option>
                  <option value="4" @if($imovel->quartos==4) echo selected @endif>4 quartos ou mais</option>
                </select>
              </div>
            </div>

            <br><h5> Detalhes do Imóvel:</h5><br>
            <div class="control-group form-group row">
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cozinha" name="cozinha" value="t" @if($imovel->cozinha==true) echo checked=""@endif>
                  <label class="custom-control-label" for="cozinha">Cozinha</label>
                </div>
              </div>
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="churras" name="churras" value="t" @if($imovel->churras==true) echo checked=""@endif>
                  <label class="custom-control-label" for="churras">Churrasqueira</label>
                </div>
              </div>
            </div>

            <div class="control-group form-group row">
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="mobilia" name="mobilia" value="t" @if($imovel->mobilia==true) echo checked=""@endif>
                  <label class="custom-control-label" for="mobilia">Mobília</label>
                </div>
              </div>
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="aguaq" name="aguaq" value="t" @if($imovel->aguaq==true) echo checked=""@endif>
                  <label class="custom-control-label" for="aguaq">Água Quente</label>
                </div>
              </div>
            </div>

            <div class="control-group form-group row">
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="sala" name="sala" value="t" @if($imovel->sala==true) echo checked=""@endif>
                  <label class="custom-control-label" for="sala">Sala de Estar</label>
                </div>
              </div>
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="lavanderia" name="lavanderia" value="t" @if($imovel->lavanderia==true) echo checked=""@endif>
                  <label class="custom-control-label" for="lavanderia">Lavanderia</label>
                </div>
              </div>
            </div>

            <div class="control-group form-group row">
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="fone" name="fone" value="t" @if($imovel->fone==true) echo checked=""@endif>
                  <label class="custom-control-label" for="fone">Interfone/Videofone</label>
                </div>
              </div>
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="sacada" name="sacada" value="t" @if($imovel->sacada==true) echo checked=""@endif>
                  <label class="custom-control-label" for="sacada">Sacada</label>
                </div>
              </div>
            </div>

            <div class="control-group form-group row">
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="elevador" name="elevador" value="t" @if($imovel->elevador==true) echo checked=""@endif>
                  <label class="custom-control-label" for="elevador">Elevador</label>
                </div>
              </div>
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="gas" name="gas" value="t" @if($imovel->gas==true) echo checked=""@endif>
                  <label class="custom-control-label" for="gas">Gás Central</label>
                </div>
              </div>
            </div>

            <div class="control-group form-group row">
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="medidores" name="medidores" value="t" @if($imovel->medidores==true) echo checked=""@endif>
                  <label class="custom-control-label" for="medidores">Medidores Individuais</label>
                </div>
              </div>
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="festas" name="festas" value="t" @if($imovel->festas==true) echo checked=""@endif>
                  <label class="custom-control-label" for="festas">Salão de Festas</label>
                </div>
              </div>
            </div>

            <div class="control-group form-group row">
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="portaria" name="portaria" value="t" @if($imovel->portaria==true) echo checked=""@endif>
                  <label class="custom-control-label" for="portaria">Portaria</label>
                </div>
              </div>
              <div class="custom control custom checkbox mb-3 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="net" name="net" value="t" @if($imovel->net==true) echo checked=""@endif>
                  <label class="custom-control-label" for="net">Internet</label>
                </div>
              </div>
            </div>

            {{-- APARTAMENTO --}}

            @include('layouts.admin.alterar.2geral-alterar')

              <!-- /.row -->

            </div>
            <!-- /.container -->

            <!-- Footer -->
            @include('layouts.footer')
            @include('layouts.admin.scripts')

            <!-- Contact form JavaScript -->
            <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

          </body>

</html>
