{{-- {{dd($imovels)}} --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Áreas Rurais</title>
    @include('layouts.admin.head')
</head>
<body>
    <div class="container">
        @include('layouts.admin.navbar')
        <br />
        <h1 class="mt-4 mb-3">Áreas Rurais</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Admin</a>
            </li>
            <li class="breadcrumb-item active">Áreas Rurais</li>
        </ol>
        <table class="table table-striped mid-field">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Área Total</th>
                    <th>Endereço</th>
                    <th>Valor</th>
                    <th>Cidade</th>
                    <th colspan="3">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imovels as $imovel)

                <tr>
                    <td>{{$imovel['id']}} </td>
                    <td>{{$imovel['titulo']}}</td>
                    <td>{{$imovel['areatt']}} m²</td>
                    <td>{{$imovel['endereco']}}</td>
                    <td id="valor">{{$imovel['valor']}}</td>
                    <td>{{$imovel['cidade']}}</td>
                    <td><a href="{{url($imovel['discriminator'].'/ver', Illuminate\Support\Facades\Crypt::encryptString($imovel['id']))}}" class="btn btn-success">Ver Mais</a></td>
                    <td><a href="{{url($imovel['discriminator'].'/alterar', Illuminate\Support\Facades\Crypt::encryptString($imovel['id']))}}" class="btn btn-warning">Alterar</a></td>
                    <td>
                        <form action="{{action('ImovelController@destroy', $imovel['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-md-12">
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.admin.scripts')
</body>
</html>
