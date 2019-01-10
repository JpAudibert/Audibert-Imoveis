{{-- {{dd($casa)}} --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Casas</title>
    @include('layouts.site.head')
</head>
<body>
    <div class="container">
        @include('layouts.site.navbar')
        <br />
        <h1 class="mt-4 mb-3">Casas</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">Casas</li>
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
            @foreach ($casas as $casa)
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{url($casa['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($casa['id']))}}"><img class="card-img-top tamanho-card" src="/images/imovel{{$casa->id}}/{{$casa->img[0]}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url($casa['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($casa['id']))}}">{{$casa['titulo']}}</a>
                        </h4>
                        <p class="card-text"><i class="fas fa-home"></i>&nbsp;&nbsp; Casa</p>
                        <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$casa->areatt}} m²</p>
                        <p class="card-text"><i class="fas fa-bed"></i>&nbsp;&nbsp; @if ($casa->quartos==1) {{$casa->quartos}} quarto @else {{$casa->quartos}} quartos @endif</p>
                        <p class="card-text"><i class="fas fa-car"></i>&nbsp;&nbsp; @if ($casa->garagem==1) {{$casa->garagem}} vaga @else {{$casa->garagem}} vagas @endif</p>
                        <p class="card-text"><i class="fas fa-toilet-paper"></i>&nbsp;&nbsp; @if ($casa->banheiros==1) {{$casa->banheiros}} banheiro @else {{$casa->banheiros}} banheiros @endif</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="centro">
                {{ $casas->links() }}
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.site.scripts')
</body>
</html>
