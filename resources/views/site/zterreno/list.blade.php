{{-- {{dd($terreno)}} --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Terrenos</title>
    @include('layouts.site.head')
</head>
<body>
    <div class="container">
        @include('layouts.site.navbar')
        <br />
        <h1 class="mt-4 mb-3">Terrenos</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">Terrenos</li>
        </ol>
        <div class="row">
            @foreach ($terrenos as $terreno)
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{url($terreno['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($terreno['id']))}}"><img class="card-img-top tamanho-card" src="/images/imovel{{$terreno->id}}/{{$terreno->img[0]}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url($terreno['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($terreno['id']))}}">{{$terreno['titulo']}}</a>
                        </h4>
                        <p class="card-text"><i class="fas fa-object-group"></i>&nbsp;&nbsp; Terreno</p>
                        <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$terreno->areatt}} m²</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="centro">
            {{ $terrenos->links() }}
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.site.scripts')
</body>
</html>
