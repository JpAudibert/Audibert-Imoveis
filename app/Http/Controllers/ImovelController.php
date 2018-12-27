<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use App\Imagem;
use Illuminate\Support\Facades\Crypt;

class ImovelController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $imovels = Imovel::all();
        return view('admin.list', compact('imovels'));
    }

    public function indexSite()
    {
        $vendas = Imovel::inRandomOrder()->get();
        return view('welcome', compact('vendas'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function createTerreno()
    {
        return view('admin.zterreno.create');
    }
    public function createCasa()
    {
        return view('admin.zcasa.create');
    }
    public function createAp()
    {
        return view('admin.zap.create');
    }
    public function createRural()
    {
        return view('admin.zrural.create');
    }
    public function createComercial()
    {
        return view('admin.zcomercial.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $imovel = new Imovel;
        $imovel->id = $request->get('id');
        $imovel->titulo = $request->get('titulo');
        $imovel->discriminator= $request->get('discriminator');
        $imovel->areatt = $request->get('areatt');
        $imovel->endereco = $request->get('endereco');
        if(!is_numeric($request->get('valor'))){
            $imovel->valor = "Sob consulta";
        }elseif(is_numeric($request->get('valor'))){
            $imovel->valor = 'R$ '.$request->get('valor');
        }
        // dd($imovel->valor);
        $imovel->bairro = $request->get('bairro');
        $imovel->cidade = $request->get('cidade');
        $imovel->estado = $request->get('estado');
        $imovel->cep = $request->get('cep');
        $imovel->obs = $request->get('obs');

        switch ($request->get('discriminator')) {
            case 'casa':
            $imovel->areapv = $request->get('areapv');
            $imovel->garagem = $request->get('garagem');
            $imovel->jardim = $request->get('jardim');
            $imovel->cerca = $request->get('cerca');
            $imovel->churras = $request->get('churras');
            $imovel->quartos = $request->get('quartos');
            $imovel->banheiros = $request->get('banheiros');
            $imovel->aguaq = $request->get('aguaq');
            $imovel->lavanderia = $request->get('lavanderia');
            $imovel->quiosque = $request->get('quiosque');
            $imovel->mobilia = $request->get('mobilia');
            break;

            case 'ap':
            $imovel->areapv = $request->get('areapv');
            $imovel->garagem = $request->get('garagem');
            $imovel->churras = $request->get('churras');
            $imovel->quartos = $request->get('quartos');
            $imovel->banheiros = $request->get('banheiros');
            $imovel->lavanderia = $request->get('lavanderia');
            $imovel->cozinha = $request->get('cozinha');
            $imovel->sacada = $request->get('sacada');
            $imovel->fone = $request->get('fone');
            $imovel->net = $request->get('net');
            $imovel->sala = $request->get('sala');
            $imovel->elevador = $request->get('elevador');
            $imovel->gas = $request->get('gas');
            $imovel->festas = $request->get('festas');
            $imovel->portaria = $request->get('portaria');
            $imovel->medidores = $request->get('medidores');
            $imovel->aguaq = $request->get('aguaq');
            $imovel->mobilia = $request->get('mobilia');
            break;

            case 'rural':
            $imovel->cerca = $request->get('cerca');
            $imovel->energia = $request->get('energia');
            break;

            case 'comercial':
            $imovel->categoria = $request->get('categoria');
            break;

            default:
            echo "ALGO DE ERRADO";
        }

        $imovel->save();
        $this->validate($request, [

            'img' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ]);

            if($request->hasfile('img'))
            {

                foreach($request->file('img') as $image)
                {
                    $name=$image->getClientOriginalName();
                    $image->move(public_path().'/images/imovel'.$imovel->id.'/', $name);
                    $data[] = $name;
                }
            }

            $imovel->img=$data;
            $imovel->save();

            return redirect('visualizar')->with('success', 'Imóvel inserido com sucesso');
        }

        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function showAp($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zap.show',compact('imovel','id'));
        }

        public function showCasa($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zcasa.show',compact('imovel','id'));
        }

        public function showTerreno($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zterreno.show',compact('imovel','id'));
        }

        public function showRural($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zrural.show',compact('imovel','id'));
        }

        public function showComercial($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zcomercial.show',compact('imovel','id'));
        }

        public function showApSite($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('site.zap.show',compact('imovel','id'));
        }

        public function showCasaSite($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('site.zcasa.show',compact('imovel','id'));
        }

        public function showTerrenoSite($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('site.zterreno.show',compact('imovel','id'));
        }

        public function showRuralSite($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('site.zrural.show',compact('imovel','id'));
        }

        public function showComercialSite($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('site.zcomercial.show',compact('imovel','id'));
        }
        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function editTerreno($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zterreno.edit',compact('imovel','id'));

        }

        public function editCasa($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zcasa.edit',compact('imovel','id'));

        }

        public function editAp($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zap.edit',compact('imovel','id'));

        }

        public function editRural($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zrural.edit',compact('imovel','id'));

        }

        public function editComercial($id)
        {
            $imovel = Imovel::find(Crypt::decryptString($id));
            return view('admin.zcomercial.edit',compact('imovel','id'));

        }

        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request)
        {
            $imovel = Imovel::find($request->id);
            $imovel->titulo = $request->get('titulo');
            $imovel->areatt = $request->get('areatt');
            $imovel->endereco = $request->get('endereco');
            $imovel->valor = $request->get('valor');
            $imovel->bairro = $request->get('bairro');
            $imovel->cidade = $request->get('cidade');
            $imovel->estado = $request->get('estado');
            $imovel->cep = $request->get('cep');
            $imovel->obs = $request->get('obs');
            $imovel->areapv = $request->get('areapv');
            $imovel->garagem = $request->get('garagem');
            $imovel->jardim = $request->get('jardim');
            $imovel->churras = $request->get('churras');
            $imovel->quartos = $request->get('quartos');
            $imovel->banheiros = $request->get('banheiros');
            $imovel->aguaq = $request->get('aguaq');
            $imovel->sala = $request->get('sala');
            $imovel->lavanderia = $request->get('lavanderia');
            $imovel->quiosque = $request->get('quiosque');
            $imovel->mobilia = $request->get('mobilia');
            $imovel->cozinha = $request->get('cozinha');
            $imovel->sacada = $request->get('sacada');
            $imovel->fone = $request->get('fone');
            $imovel->net = $request->get('net');
            $imovel->elevador = $request->get('elevador');
            $imovel->gas = $request->get('gas');
            $imovel->festas = $request->get('festas');
            $imovel->portaria = $request->get('portaria');
            $imovel->medidores = $request->get('medidores');
            $imovel->cerca = $request->get('cerca');
            $imovel->energia = $request->get('energia');
            $imovel->categoria = $request->get('categoria');
            $imovel->save();
            $this->validate($request, [

                'img' => 'required',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

                ]);

                if($request->hasfile('img'))
                {

                    foreach($request->file('img') as $image)
                    {
                        $name=$image->getClientOriginalName();
                        $image->move(public_path().'/images/imovel'.$imovel->id.'/', $name);
                        $data[] = $name;
                    }
                }

                $imovel->img=$data;
                $imovel->save();

            return redirect('visualizar')->with('success', 'Imóvel alterado com sucesso');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
            $imovel = Imovel::find($id);
            $imovel->delete('/images/imovel'.$id);
            $imovel->delete();
            return redirect('visualizar')->with('success','Imóvel deletado com Sucesso');
        }

        public function quemsomos()
        {
            return view('quemsomos');
        }

    }
