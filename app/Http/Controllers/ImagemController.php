<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagem;
class ImagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTerreno($id)
    {
        return view('admin.zterreno.create', compact($id));
    }
    public function createCasa()
    {
        return view('admin.zcasa.create', compact($id));
    }
    public function createAp()
    {
        return view('admin.zap.create', compact($id));
    }
    public function createRural()
    {
        return view('admin.zrural.create', compact($id));
    }
    public function createComercial()
    {
        return view('admin.zcomercial.create', compact($id));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imovel = Imovel::all();
        if($request->hasFile['img']){
            foreach ($request->img as $img) {
                $id = $request->id;
                $nome = $img->getClientOriginalName();
                $img->move(public_path().'/images/', $nome);
                $imagem = new Imagem;
                $imagem->imgnome = $nome;
                $imagem->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editTerreno($id)
    {
        $imovel = Imovel::find($id);
        return view('admin.zterreno.edit',compact('imovel','id'));

    }

    public function editCasa($id)
    {
        $imovel = Imovel::find($id);
        return view('admin.zcasa.edit',compact('imovel','id'));

    }

    public function editAp($id)
    {
        $imovel = Imovel::find($id);
        return view('admin.zap.edit',compact('imovel','id'));

    }

    public function editRural($id)
    {
        $imovel = Imovel::find($id);
        return view('admin.zrural.edit',compact('imovel','id'));

    }

    public function editComercial($id)
    {
        $imovel = Imovel::find($id);
        return view('admin.zcomercial.edit',compact('imovel','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
