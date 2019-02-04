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
<h1 class="mt-4 mb-3">Inserir Área Rural</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('home')}}">Admin</a>
    </li>
    <li class="breadcrumb-item active">Inserir Área Rural</li>
</ol>
<!-- Content Row -->
<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3 mb-4">
        <div class="list-group">
                <a href="{{url('apartamento/inserir')}}" class="list-group-item">Apartamento</a>
                <a href="{{url('casa/inserir')}}" class="list-group-item">Casa</a>
                <a href="{{url('terreno/inserir')}}" class="list-group-item">Terreno</a>
                <a href="{{url('rural/inserir')}}" class="list-group-item active">Área Rural</a>
                <a href="{{url('comercial/inserir')}}" class="list-group-item">Salas/Pavilhões</a>
        </div>
    </div>
    <!-- Content Column -->
    <div class="col-lg-9 mb-4">
        <form name="imovel" id="imovel" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- IMPORTANTE AQUI!!! --}}
            <input type="hidden" name="discriminator" id="discriminator" value="rural">
            {{-- IMPORTANTE AQUI!!! --}}

            <div class="container">
                <h3>Área Rural</h3>
                @include('layouts.admin.inserir.1geral-inserir')

                {{-- ÁREA RURAL --}}

                <br><h5> Detalhes do Imóvel:</h5><br>
                    <div class="control-group form-group row">
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="cerca" name="cerca" value="t">
                          <label class="custom-control-label" for="cerca">Cerca</label>
                        </div>
                      </div>
                      <div class="custom control custom checkbox mb-3 col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="energia" name="energia" value="t">
                          <label class="custom-control-label" for="energia">Energia Elétrica</label>
                        </div>
                      </div>
                    </div>

                {{-- ÁREA RURAL --}}

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
