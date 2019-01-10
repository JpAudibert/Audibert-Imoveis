{{-- {{dd($imovels)}} --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Terrenos</title>
    @include('layouts.admin.head')
</head>
<body>
    <div class="container">
        @include('layouts.admin.navbar')
        <br />
        <h1 class="mt-4 mb-3">Terrenos</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Admin</a>
            </li>
            <li class="breadcrumb-item active">Terrenos</li>
        </ol>
        <div class="tabela-listagem"></div>
        <div class="table-responsive">
            <table class="table table-striped mid-field" id="imovel">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Área Total</th>
                        <th>Endereço</th>
                        <th>Valor</th>
                        <th>Cidade</th>
                        <th>Açõo 1</th>
                        <th>Açõo 2</th>
                        <th>Açõo 3</th>
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
            <div class="tabela-listagem"></div>

        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.admin.scripts')
<script>
    $(document).ready( function () {
        $('#imovel').DataTable();
    } );
</script>
</body>
</html>
