{{-- {{dd($imovel->img)}} --}}
<html lang="en">

<head>
    @include('\layouts.admin.head')
    <title>Mostrar Imóvel</title>
</head>
<body>
    <div class="container">
        @include('\layouts.admin.navbar')

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$imovel->titulo}}
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Admin</a>
            </li>
            <li class="breadcrumb-item active">Mostrar Apartamento</li>
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
                    <i class="fas fa-map-pin"></i>&nbsp;&nbsp;Endereço: {{$imovel->endereco}}, {{$imovel->bairro}}, {{$imovel->cidade}}, {{$imovel->estado}} - {{$imovel->cep}}
                </div>
                <div class="alinha-texto">
                    <i class="fas fa-ruler-combined"></i>&nbsp;&nbsp;Área Total: {{$imovel->areatt}} m² -
                    &nbsp;&nbsp;<i class="fas fa-car"></i>&nbsp;&nbsp;Vagas de Garagem: @if ($imovel->garagem=="0")
                    Sem garagem -
                    @else
                    {{$imovel->garagem}} vagas -
                    @endif
                    &nbsp;&nbsp;<i class="fas fa-bed"></i> Dormitórios: @if ($imovel->quartos=="1")
                    {{$imovel->quartos}} quarto -
                    @else
                    {{$imovel->quartos}} quartos -
                    @endif
                    &nbsp;&nbsp;<i class="fas fa-money-bill-wave"></i> Valor: {{$imovel->valor}}
                </div>
            </div>
            <div class="dados">
                <h4 class="titulo-descricao">Descrição do imovel:</h4>
                <div class="descricao">
                    <p class="texto-50">{{$imovel->obs}}</p>
                    <br>
                    <h5>Notas:</h5>
                    @if ($imovel->notas==null)
                    Não há anotações.
                    @else
                    <p>{{$imovel->notas}}</p>
                    @endif
                </div>
                <div class="dados-mais">
                    <p><i class="fas fa-ruler-combined green"></i>&nbsp;&nbsp; Área Privativa: {{$imovel->areapv}} m² </p>
                    @if ($imovel->cozinha!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Cozinha</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Cozinha </p> @endif
                    @if ($imovel->churras!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Churrasqueira</p>  @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Churrasqueira</p> @endif
                    @if ($imovel->mobilia!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Mobília</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Mobília</p> @endif
                    @if ($imovel->aguaq!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Água Quente </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Água Quente</p> @endif
                    @if ($imovel->sala!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Sala de Estar </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Sala de Estar</p> @endif
                    @if ($imovel->lavandeira!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Lavanderia</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Lavanderia</p> @endif
                    @if ($imovel->fone!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Interfone/Videofone </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Interfone/Videofone </p> @endif
                    @if ($imovel->sacada!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Sacada</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Sacada</p> @endif
                    @if ($imovel->elevador!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Elevador</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Elevador</p> @endif
                    @if ($imovel->gas!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Gás Central </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Gás Central</p> @endif
                    @if ($imovel->medidores!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Medidores Individuais </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Medidores Individuais</p> @endif
                    @if ($imovel->festas!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Salão de Festas </p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Salão de Festas</p> @endif
                    @if ($imovel->portaria!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Portaria</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Portaria</p> @endif
                    @if ($imovel->net!=="t")<p  class="nao-mostra"><i class="far fa-check-square green"></i> Internet</p> @else <p><i class="far fa-check-square green"></i>&nbsp;&nbsp; Internet</p> @endif
                </div>
            </div>

        </div>
    </div>
    @include('\layouts.footer')
    @include('\layouts.admin.scripts')

</body>

</html>
