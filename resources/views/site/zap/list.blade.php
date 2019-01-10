<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Apartamentos</title>
    @include('layouts.site.head')
</head>
<body>
    <div class="container">
        @include('layouts.site.navbar')
        <br />
        <h1 class="mt-4 mb-3">Apartamentos</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">Apartamentos</li>
        </ol>
        <div class="row">
            <div class="col-md-4 filtros">
                <select class="custom-select" id="quarto">
                    <option hidden>Selecione Número de Quartos</option>
                    <option value="1">1 Quarto</option>
                    <option value="2">2 Quartos</option>
                    <option value="3">3 Quartos</option>
                    <option value="4">4 Quartos ou mais</option>
                </select>
            </div>
            <div class="col-md-4 filtros">
                <select class="custom-select" id="banheiro">
                    <option hidden>Selecione Número de Banheiros</option>
                    <option value="1">1 Banheiro</option>
                    <option value="2">2 Banheiros</option>
                    <option value="3">3 Banheiros</option>
                    <option value="4">4 Banheiros ou mais</option>
                </select>
            </div>
        </div>
        <div class="row">
            @foreach ($aps as $ap)
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{url($ap['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($ap['id']))}}"><img class="card-img-top tamanho-card" src="/images/imovel{{$ap->id}}/{{$ap->img[0]}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url($ap['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($ap['id']))}}">{{$ap['titulo']}}</a>
                        </h4>
                        <p class="card-text"><i class="fas fa-building"></i>&nbsp;&nbsp; Apartamento</p>
                        <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$ap->areatt}} m²</p>
                        <p class="card-text"><i class="fas fa-bed"></i>&nbsp;&nbsp; @if ($ap->quartos==1) {{$ap->quartos}} quarto @else {{$ap->quartos}} quartos @endif</p>
                        <p class="card-text"><i class="fas fa-car"></i>&nbsp;&nbsp; @if ($ap->garagem==1) {{$ap->garagem}} vaga @else {{$ap->garagem}} vagas @endif</p>
                        <p class="card-text"><i class="fas fa-toilet-paper"></i>&nbsp;&nbsp; @if ($ap->banheiros==1) {{$ap->banheiros}} banheiro @else {{$ap->banheiros}} banheiros @endif</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="centro">
                {{$aps->links()}}
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.site.scripts')
</body>
</html>
