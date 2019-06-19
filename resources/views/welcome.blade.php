<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.site.head')
    <title>Audibert Imóveis</title>
</head>
<body>
    @include('layouts.site.navbar')
    @include('layouts.site.carousel')
    <div class="container">
        <h2 class="abaixa abaixa-muito">Destaques:</h2>
        <h3 id="prot"></h3>
        <div class="row">
            @php ($i=0)
            @foreach ($vendas as $venda)
            @php($i++)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{url($venda['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($venda['id']))}}"><img class="card-img-top tamanho-inicial" src="/images/imovel{{$venda->id}}/{{$venda->img[0]}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url($venda['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($venda['id']))}}">{{$venda['titulo']}}</a>
                        </h4>
                        <p class="card-text">
                            @switch($venda->discriminator)
                            @case("apartamento")
                            <p class="card-text"><i class="fas fa-building"></i>&nbsp;&nbsp; Apartamento</p>
                            <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$venda->areatt}} m²</p>
                            <p class="card-text"><i class="fas fa-bed"></i>&nbsp;&nbsp; @if ($venda->quartos==1) {{$venda->quartos}} quarto @else {{$venda->quartos}} quartos @endif</p>
                            <p class="card-text"><i class="fas fa-car"></i>&nbsp;&nbsp; @if ($venda->garagem==1) {{$venda->garagem}} vaga @else {{$venda->garagem}} vagas @endif</p>
                            <p class="card-text"><i class="fas fa-toilet-paper"></i>&nbsp;&nbsp; @if ($venda->banheiros==1) {{$venda->banheiros}} banheiro @else {{$venda->banheiros}} banheiros @endif</p>
                            @break
                            @case("casa")
                            <p class="card-text"><i class="fas fa-home"></i>&nbsp;&nbsp; Casa</p>
                            <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$venda->areatt}} m²</p>
                            <p class="card-text"><i class="fas fa-bed"></i>&nbsp;&nbsp; @if ($venda->quartos==1) {{$venda->quartos}} quarto @else {{$venda->quartos}} quartos @endif</p>
                            <p class="card-text"><i class="fas fa-car"></i>&nbsp;&nbsp; @if ($venda->garagem==1) {{$venda->garagem}} vaga @else {{$venda->garagem}} vagas @endif</p>
                            <p class="card-text"><i class="fas fa-toilet-paper"></i>&nbsp;&nbsp; @if ($venda->banheiros==1) {{$venda->banheiros}} banheiro @else {{$venda->banheiros}} banheiros @endif</p>
                            @break
                            @case("comercial")
                            <p class="card-text">@if ($venda->categoria=="1")<i class="fas fa-store"></i> &nbsp;&nbsp;Sala Comercial @else <i class="fas fa-industry"></i> &nbsp;&nbsp;Pavilhão Industrial @endif</p>
                            <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$venda->areatt}} m²</p>
                            @break
                            @case("rural")
                            <p class="card-text"><i class="fas fa-horse"></i>&nbsp;&nbsp; Área Rural</p>
                            <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$venda->areatt}} m²</p>
                            @if ($venda->cerca=="t")<p class="card-text"><i class="fas fa-vector-square"></i>&nbsp;&nbsp; Cercado @endif</p>
                            @if ($venda->energia=="t")<p class="card-text"><i class="fas fa-bolt"></i>&nbsp;&nbsp; Com Acesso a Energia Elétrica @endif</p>
                            @break
                            @case("terreno")
                            <p class="card-text"><i class="fas fa-object-group"></i>&nbsp;&nbsp; Terreno</p>
                            <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$venda->areatt}} m²</p>
                            @break
                            @default
                            Erro
                            @endswitch
                        </p>
                    </div>
                </div>
            </div>
            @if ($i==6)
            @break
            @endif
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.site.scripts')
</body>
</html>
