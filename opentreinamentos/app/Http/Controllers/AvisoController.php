<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use Illuminate\Http\Request;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('avisos/notificacoes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {
        $avisos = Aviso::all();
        return view('/avisos/notificacoes',['avisos'=>$avisos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cadnotificacao = new Aviso;
        $cadnotificacao->notificacoes = $request->notificacoes;
        $cadnotificacao->status       = $request->status;
        $cadnotificacao->dataabertura = $request->dataabertura;
       $cadnotificacao->save();     

      

          return redirect('/notificacoes')->with('msg','Notificação criada com sucesso');
        }

    /**
     * Display the specified resource.
     */
    public function show(Aviso $aviso)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)    {
        $aviso = Aviso::findOrFail($id);
        return view('avisos/editanotificacao',['aviso' => $aviso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Aviso::findOrFail($request->id)->update($request->all());
        return redirect('/notificacoes')->with('msg', 'Notificação Alterada com Sucesso!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        AViso::where('id', '=', $id)->delete();

        return redirect('/notificacoes')->with('msg', ' Notificação Deletada!!!');
    }
}
