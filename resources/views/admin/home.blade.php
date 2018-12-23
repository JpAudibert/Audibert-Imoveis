<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')
    <title>Administração</title>
</head>
<body>
    <div class="container">
    @include('layouts.admin.navbar')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Imóveis</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in! Insira <a href="{{url('terrenoinserir')}}" >Terreno</a> aqui!
                    </div>
                </div>
                <div class="card">
                        <div class="card-header">Imóveis</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in! Insira <a href="{{url('terrenoinserir')}}" >Terreno</a> aqui!
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.scripts')
</body>
</html>
