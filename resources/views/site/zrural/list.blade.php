{{-- {{dd($rural)}} --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Áreas Rurais</title>
    @include('layouts.site.head')
</head>
<body>
    <div class="container">
        @include('layouts.site.navbar')
        <br />
        <h1 class="mt-4 mb-3">Áreas Rurais</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">Áreas Rurais</li>
        </ol>
        <div class="row">
            @foreach ($rural->where("discriminator","=","rural") as $rural)
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{url($rural['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($rural['id']))}}"><img class="card-img-top tamanho-card" src="/images/imovel{{$rural->id}}/{{$rural->img[0]}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url($rural['discriminator'].'/ver/mais', Illuminate\Support\Facades\Crypt::encryptString($rural['id']))}}">{{$rural['titulo']}}</a>
                        </h4>
                        <p class="card-text"><i class="fas fa-horse"></i>&nbsp;&nbsp; Área Rural</p>
                        <p class="card-text"><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; {{$rural->areatt}} m²</p>
                        <p class="card-text"><i class="fas fa-vector-square"></i>&nbsp;&nbsp; @if ($rural->cerca=="t") Cercado @endif</p>
                        <p class="card-text"><i class="fas fa-bolt"></i>&nbsp;&nbsp; @if ($rural->energia=="t") Com Acesso a Energia Elétrica @endif</p>
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
