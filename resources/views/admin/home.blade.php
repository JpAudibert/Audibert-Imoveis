@php
$a=0;
$c=0;
$co=0;
$r=0;
$t=0;
$all=0;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')
    <title>Administração</title>
</head>
<body>
    <div class="container">
        @include('layouts.admin.navbar')
        <div class="row justify-content-center dashboard">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-header mid-field">Inserir Imóveis</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{url('/apartamento/inserir')}}">Apartamento</a></li>
                            <li class="list-group-item"><a href="{{url('/casa/inserir')}}">Casa</a></li>
                            <li class="list-group-item"><a href="{{url('/terreno/inserir')}}">Terreno</a></li>
                            <li class="list-group-item"><a href="{{url('/rural/inserir')}}">Área Rural</a></li>
                            <li class="list-group-item"><a href="{{url('/comercial/inserir')}}">Comercial</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-header mid-field">Visualizar Imóveis</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{url('/apartamento/visualizar')}}">Apartamento @foreach ($imoveis->where("discriminator","=","apartamento") as $im) @php $a++; @endphp @endforeach - {{$a}}</a></li>
                                <li class="list-group-item"><a href="{{url('/casa/visualizar')}}">Casa @foreach ($imoveis->where("discriminator","=","casa") as $im) @php $c++; @endphp @endforeach - {{$c}}</a></li>
                                <li class="list-group-item"><a href="{{url('/terreno/visualizar')}}">Terreno @foreach ($imoveis->where("discriminator","=","terreno") as $im) @php $t++; @endphp @endforeach - {{$t}}</a></li>
                                <li class="list-group-item"><a href="{{url('/rural/visualizar')}}">Área Rural @foreach ($imoveis->where("discriminator","=","rural") as $im) @php $r++; @endphp @endforeach - {{$r}}</a></li>
                                <li class="list-group-item"><a href="{{url('/comercial/visualizar')}}">Comercial @foreach ($imoveis->where("discriminator","=","comercial") as $im) @php $co++; @endphp @endforeach - {{$co}}</a></li>
                                <li class="list-group-item"><a href="{{url('/visualizar')}}">Todos imóveis @foreach ($imoveis as $im) @php $all++; @endphp @endforeach - {{$all}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.admin.scripts')
    </body>
    </html>
