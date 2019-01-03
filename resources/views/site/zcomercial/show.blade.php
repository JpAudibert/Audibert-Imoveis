{{-- {{dd($imovel->img)}} --}}
<html lang="en">

<head>
    @include('\layouts.site.head')
    <title>Mostrar Imóvel</title>
</head>
<body>
    <div class="container">
        @include('\layouts.site.navbar')

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$imovel->titulo}}
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Página inicial</a>
            </li>
            <li class="breadcrumb-item active">Mostrar Comercial</li>
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
                    <i class="fas fa-ruler-combined"></i>&nbsp;&nbsp;Área do Terreno: {{$imovel->areatt}} m² -
                    &nbsp;&nbsp;<i class="fas fa-money-bill-wave"></i> Valor: {{$imovel->valor}} -
                    @if ($imovel->categoria=="1")
                    &nbsp;&nbsp;<i class="fas fa-store-alt"></i> Tipo: Sala Comercial
                    @else
                    &nbsp;&nbsp;<i class="fas fa-industry"></i> Tipo: Pavilhão Industrial
                    @endif
                </div>
            </div>
            <div class="dados">
                <h4 class="titulo-descricao">Descrição do imovel:</h4>
                <div class="descricao-site">
                    <p>{{$imovel->obs}}</p>
                    <br>
                </div>
            </div>

        </div>
    </div>
    @include('\layouts.footer')
    @include('\layouts.site.scripts')

</body>

</html>
