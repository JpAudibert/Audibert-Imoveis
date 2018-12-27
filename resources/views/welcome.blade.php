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
            <div class="row">
                @php ($i=0)
                @foreach ($vendas as $venda)
                @php($i++)
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            <a href="{{url($venda['discriminator'].'/ver', Illuminate\Support\Facades\Crypt::encryptString($venda['id']))}}"><img class="card-img-top tamanho-inicial" src="/images/imovel{{$venda->id}}/{{$venda->img[0]}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{url($venda['discriminator'].'/ver', Illuminate\Support\Facades\Crypt::encryptString($venda['id']))}}">{{$venda['titulo']}}</a>
                    </h4>
                    <p class="card-text">{{$venda['obs']}}</p>
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
        <link rel="stylesheet" href="/js/bootstrap.bundle.min.js">
    </body>
</html>
