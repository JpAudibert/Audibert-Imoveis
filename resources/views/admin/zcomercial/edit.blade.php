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
            <h1 class="mt-4 mb-3">Alterar Sala Comercial/Pavilhão</small>
          </h1>

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('home')}}">Admin</a>
            </li>
            <li class="breadcrumb-item active">Alterar Sala Comercial/Pavilhão</li>
          </ol>
            <!-- Content Row -->
          <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-3 mb-4">
              <div class="list-group">
                    <a href="{{url('apartamento/inserir')}}" class="list-group-item">Apartamento</a>
                    <a href="{{url('casa/inserir')}}" class="list-group-item">Casa</a>
                    <a href="{{url('terreno/inserir')}}" class="list-group-item">Terreno</a>
                    <a href="{{url('rural/inserir')}}" class="list-group-item">Área Rural</a>
                    <a href="{{url('comercial/inserir')}}" class="list-group-item active">Salas/Pavilhões</a>
              </div>
            </div>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
              <form name="imovel" id="imovel" action="{{route('update', Illuminate\Support\Facades\Crypt::encryptString($id))}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Sala Comercial/Pavilhão</h3>
            @include('layouts.admin.alterar.1geral-alterar')

            {{-- COMERCIAL --}}

            <br><h5> Dados do Imóvel:</h5><br>
                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="categoria" class="form-label">Categoria do Comércio:</label><br>
                    <select name="categoria" id="categoria" class="custom-select">
                      <option hidden="">Selecione:</option>
                      <option value="1" @if($imovel->categoria==1) echo selected @endif>Sala Comercial</option>
                      <option value="2" @if($imovel->categoria==2) echo selected @endif>Pavilhão Industrial</option>
                    </select>
                  </div>
                </div>

            {{-- COMERCIAL --}}

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
