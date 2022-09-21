<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    protected $categorias;

    public function __construct(Categoria $categorias)
    {
        $this->categorias = $categorias;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->categorias->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->categorias->create($request->all());
        return response()->json(['msg' => 'Criado com sucesso !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return response()->json($this->categorias->find($id));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->categorias->find($id)->update($request->all());

        return response()->json(['msg' => 'Categoria atualizada com sucesso !']);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->categorias->find($id)->delete();

        return response()->json(['msg' => 'Categoria deletada com sucesso !']);

    }
}
