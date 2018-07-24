<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parceiro;
use App\Http\Resources\Parceiro as ParceiroResource;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $parceiro = Parceiro::all();

        return $parceiro;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parceiro = new Parceiro;

        $parceiro->tipo = $request->tipo;
        $parceiro->nome = $request->nome;
        $parceiro->investimento = $request->investimento;

        $parceiro->save();
        return $parceiro;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parceiro=Parceiro::find($id);
        return $parceiro;
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
        $parceiro = Parceiro::find(id);

        $parceiro->tipo = $request->tipo;
        $parceiro->preco = $request->preco;
        $parceiro->nome = $request->nome;

        $parceiro->save();
        return $parceiro;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parceiro = Parceiro::find($id);
        $parceiro->delete();
        return "Parceiro deletado";
    }

    public function showResource() {
        return new ParceiroResource(Parceiro::find(2));
    }
}
