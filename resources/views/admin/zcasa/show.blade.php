{{-- {{dd($imovel->img)}} --}}
<html lang="en">

<head>
    @include('layouts.admin.head')
    <title>Mostrar Imóvel</title>
</head>
<body>
    <div class="container">
        @include('layouts.admin.navbar')

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$imovel->titulo}}
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Admin</a>
            </li>
            <li class="breadcrumb-item active">Mostrar Casa</li>
        </ol>
        <!-- Content Row -->
        <div class="row">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        @for ($i = 1; $i < count($imovel->img); $i++)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 fit" src="/images/imovel{{$imovel->id}}/{{$imovel->img[0]}}">
                        </div>
                        @for ($j = 1; $j < count($imovel->img); $j++)
                        <div class="carousel-item">
                            <img class="d-block w-100 fit" src="/images/imovel{{$imovel->id}}/{{$imovel->img[$j]}}">
                        </div>
                        @endfor
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="listagem-imovel box">
                <div class="alinha-texto">
                    <i class="fas fa-map-pin"></i>&nbsp;&nbsp;Endereço: {{$imovel->endereco}}, {{$imovel->bairro}}, {{$imovel->cidade}}, {{$imovel->estado}} - {{$imovel->cep}} - &nbsp;&nbsp;<i class="fas fa-money-bill-wave"></i> Valor: {{$imovel->valor}}
                </div>
                <div class="alinha-texto">
                    <i class="fas fa-ruler-combined"></i>&nbsp;&nbsp;Área do Terreno: {{$imovel->areatt}} m² -
                    &nbsp;&nbsp;<i class="fas fa-car"></i>&nbsp;&nbsp;Vagas de Garagem: @if ($imovel->garagem=="0")
                    Sem garagem
                    @else
                    @if ($imovel->garagem=='4')
                    {{$imovel->garagem}} ou mais vagas
                    @else
                    {{$imovel->garagem}} vagas
                    @endif
                    @endif
                </div>
                <div class="alinha-texto">
                    &nbsp;&nbsp;<i class="fas fa-bed"></i> Dormitórios: @if ($imovel->quartos=="1")
                    {{$imovel->quartos}} quarto -
                    @else
                    @if ($imovel->quartos=='4')
                    {{$imovel->quartos}} ou mais quartos -
                    @else
                    {{$imovel->quartos}} quartos -
                    @endif
                    @endif
                    &nbsp;&nbsp;<i class="fas fa-toilet-paper"></i> Banheiros: @if ($imovel->banheiros=="1")
                    {{$imovel->banheiros}} banheiro
                    @else
                    @if ($imovel->banheiros=='4')
                    {{$imovel->banheiros}} ou mais banheiros
                    @else
                    {{$imovel->banheiros}} banheiros
                    @endif
                    @endif
                </div>
            </div>
            <div class="dados">
                <h4 class="titulo-descricao">Descrição do imovel:</h4>
                <div class="descricao">
                    <p>{{$imovel->obs}}</p>
                    <br>
                    <h5>Notas:</h5>
                    @if ($imovel->nome_prop!==null) <p><strong> Nome do Proprietário:</strong> {{$imovel->nome_prop}}</p> @endif
                    @if ($imovel->matricula!==null) <p><strong> Matrícula do imóvel:</strong> {{$imovel->matricula}}</p> @endif
                    @if ($imovel->telefone_prop!==null && $imovel->celular_prop!==null) <p><strong> Telefones:</strong> {{$imovel->telefone_prop}} - {{$imovel->celular_prop}}</p>@endif
                    @if ($imovel->telefone_prop!==null && $imovel->celular_prop==null) <p><strong> Telefone:</strong> {{$imovel->telefone_prop}}</p>@endif
                    @if ($imovel->telefone_prop==null && $imovel->celular_prop!==null) <p><strong> Telefone:</strong> {{$imovel->celular_prop}}</p>@endif
                    @if ($imovel->valor!==null) <p><strong> Valor do Imóvel:</strong> R$ {{$imovel->valor_real}}</p>@endif
                    @if ($imovel->notas==null)
                    Não há anotações.
                    @else
                    <p>{{$imovel->notas}}</p>
                    @endif
                </div>
                <div class="dados-mais">
                    <p><i class="fas fa-ruler-combined green"></i>&nbsp;&nbsp; Área da Casa: {{$imovel->areapv}} m² </p>
                    @if ($imovel->jardim!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Jardim</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Jardim </p> @endif
                    @if ($imovel->churras!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Churrasqueira</p>  @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Churrasqueira</p> @endif
                    @if ($imovel->mobilia!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Mobília</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Mobília</p> @endif
                    @if ($imovel->aguaq!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Água Quente </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Água Quente</p> @endif
                    @if ($imovel->cerca!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Cercado </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Cercado</p> @endif
                    @if ($imovel->lavandeira!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Lavanderia</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Lavanderia</p> @endif
                    @if ($imovel->quiosque!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Quiosque </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Quiosque </p> @endif
                </div>
            </div>

        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.admin.scripts')

</body>

</html>
