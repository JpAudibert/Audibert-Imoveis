{{-- {{dd($comercial)}} --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comercial</title>
    @include('layouts.site.head')
</head>
<body>
    <div class="container">
        @include('layouts.site.navbar')
        <br />
        <h1 class="mt-4 mb-3">Comercial</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">Comercial</li>
        </ol>
        <div class="row">
            @foreach ($comercial->where("discriminator","=","comercial") as $comercial)
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{url($comercial['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($comercial['id']))}}"><img class="card-img-top tamanho-card" src="/images/imovel{{$comercial->id}}/{{$comercial->img[0]}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url($comercial['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($comercial['id']))}}">{{$comercial['titulo']}}</a>
                        </h4>
                        <p class="card-text">@if ($comercial->categoria=="1")<i class="fas fa-store"></i> &nbsp;&nbsp;Sala Comercial @else <i class="fas fa-industry"></i> &nbsp;&nbsp;Pavilhão Industrial @endif</p>
                        <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$comercial->areatt}} m²</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </div>

    @include('layouts.footer')
    @include('layouts.site.scripts')
</body>
</html>
