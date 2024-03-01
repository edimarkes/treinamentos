<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Models\Evento;
use App\Models\Programador;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProgramadorController extends Controller
{
 

    public function storeprogramador(Request $request)
    {


        $recebe = new Programador;
        $recebe->nome = $request->nome;
        $recebe->cep = $request->cep;
        $recebe->logradouro = $request->logradouro;
        $recebe->cidade = $request->cidade;
        $recebe->numero = $request->numero;
        $recebe->bairro = $request->bairro;
        $recebe->complemento = $request->complemento;
        $recebe->estado = $request->estado;
        $recebe->rg = $request->rg;
        $recebe->cpf = $request->cpf;
        $recebe->email = $request->email;
        $recebe->fone = $request->fone;
        $recebe->escolaridade = $request->escolaridade;
        $recebe->datanascimento = $request->datanascimento;
        $recebe->experiencia = $request->experiencia;
        $recebe->pj = $request->pj;
        $recebe->freelance = $request->freelance;
        $recebe->profissional = $request->profissional;
        $recebe->conhecimento = $request->conhecimento;
        $recebe->curriculo = $request->curriculo;


        // Envio dos currículos:


        if ($request->hasfile('curriculo') && $request->file('curriculo')->isValid()) {

            $arquivo = $request->curriculo;
            $novoNome = 'CURRICULO_' . uniqid() . '.' . $arquivo->getClientOriginalExtension();
            $arquivo->move('curriculos', $novoNome);
            $recebe->curriculo = $novoNome;
        }


        $recebe->save();

        return redirect('/bemvindo')->with('msg', "Dados e Currículo Enviados com Sucesso!!! Aguarde Contato.");
    }

    public function detalhesprogramador($id)
    {
        $result = Programador::findOrFail($id);
        return view('/programadores/detalhesprogramador', ['result' => $result]);
    }


         public function listadeprogramadores(){
        $buscandoprogramadores = Programador::all();
        return view('programadores/listadeprogramadores',['buscandoprogramadores'=>$buscandoprogramadores]);
     }
  


    public function showprogramador($id)
    {

        $infoprogramador = Programador::findOrFail($id);

        return view('/programadores/formeditaprogramador', ['infoprogramador' => $infoprogramador]);
    }
    public function updateprogramador(Request $request, $id)
    {

        $programador = Programador::findOrFail($id);

        if ($request->hasfile('curriculo') && $request->file('curriculo')->isValid()) {

            $destination = '/curriculos' . $programador->curriculo;

            if (file::exists($destination)) {
                file::delete($destination);
            }


            $arquivo = $request->curriculo;
            $novoNome = 'CURRICULO_' . uniqid() . '.' . $arquivo->getClientOriginalExtension();
            $arquivo->move('tmp_name', 'curriculos', $novoNome);
            $programador->curriculo = $novoNome;
        }




        Programador::findOrFail($request->id)->update($request->all());
        $programador->update();


        return redirect('/listadeprogramadores')->with('msg', 'Dados do Programador Alterados com Sucesso!');
    }

    public function createtrabalheaqui()
    {

        return view('/programadores/formtrabalheaqui');
    }

    public function destroy_programador($id)
    {

        Programador::findOrFail($id)->delete();


        return redirect('/listadeprogramadores')->with('msg', 'Programador Deletado');
    }

    public function download($id)
    {
        
        $data = DB::table('programadors')->where('id',$id)->first();
        $arquivo = public_path("curriculos/{$data->curriculo}");
        return response()->download($arquivo);

        
    }

    public function bemvindo(){
        return view('programadores/bemvindo');
    }



    
}
