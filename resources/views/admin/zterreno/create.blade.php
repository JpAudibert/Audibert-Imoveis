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
<h1 class="mt-4 mb-3">Inserir Terreno</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('home')}}">Admin</a>
    </li>
    <li class="breadcrumb-item active">Inserir Terreno</li>
</ol>
<!-- Content Row -->
<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3 mb-4">
        <div class="list-group">
                <a href="{{url('apartamento/inserir')}}" class="list-group-item">Apartamento</a>
                <a href="{{url('casa/inserir')}}" class="list-group-item">Casa</a>
                <a href="{{url('terreno/inserir')}}" class="list-group-item active">Terreno</a>
                <a href="{{url('rural/inserir')}}" class="list-group-item">Área Rural</a>
                <a href="{{url('comercial/inserir')}}" class="list-group-item">Salas/Pavilhões</a>
        </div>
    </div>
    <!-- Content Column -->
    <div class="col-lg-9 mb-4">
        <form name="imovel" id="imovel" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- IMPORTANTE AQUI!!! --}}
            <input type="hidden" name="discriminator" id="discriminator" value="terreno">
            {{-- IMPORTANTE AQUI!!! --}}

            <div class="container">
                <h3>Terreno</h3>
                @include('layouts.admin.inserir.1geral-inserir')
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
