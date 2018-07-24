<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicos;
use App\Http\Resources\Servicos as ServicoResource;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $servico = Servicos::all();

        return $servico;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = new Servicos;

        $servico->tipo = $request->tipo;
        $servico->preco = $request->preco;
        $servico->quantidade = $request->quantidade;

        $servico->save();
        return $servico;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servico=Servicos::find($id);
        return $servico;
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
        $servico = Servicos::find(id);

        $servico->tipo = $request->tipo;
        $servico->preco = $request->preco;
        $servico->quantidade = $request->quantidade;

        $servico->save();
        return $servico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = Servicos::find($id);
        $servico->delete();
        return "Servico deletado";
    }

    public function showResource() {
        return new ServicoResource(servico::find(2));
    }
}
