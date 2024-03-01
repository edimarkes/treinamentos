<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;
use App\Models\Evento_User;
use App\Models\Checkin;
use App\Models\Trilha;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
 
    public function detalhesmain($id){

        $evento = Checkin::findOrFail($id);
        return view('layouts/detalhesmain',['evento'=>$evento]);
    }

    
    public function criarcursos(){
        return view('eventos/criarcursos');

    }
    //==================================================================
    public function eventosabertos(Request $request)
    {

        $search = request('search');
        if ($search) {
            $eventos = Evento::where([
                ['nomecurso', 'like', '%' . $search . '%'],

            ])->paginate(8);
        } else {
            $eventos = Evento::paginate(8);
            $eventos->appends($request->all());
        }

        return view('eventos.eventosabertos', ['eventos' => $eventos, 'search' => $search]);
    }

    //==================================================================
    public function store(Request $request)
    {
        $evento = new Evento;
        $evento->nomecurso = $request->nomecurso;
        $evento->local = $request->local;
        $evento->valorevento = $request->valorevento;
        $evento->cargahoraria = $request->cargahoraria;
        $evento->periodo = $request->periodo;
        $evento->datainicial = $request->datainicial;
        $evento->datafinal = $request->datafinal;
        $evento->horainicial = $request->horainicial;
        $evento->horafinal = $request->horafinal;
        $evento->diassemana = $request->diassemana;
        $evento->formato = $request->formato;
        $evento->site = $request->site;
        $evento->descricao = $request->descricao;
        $evento->itensevento = $request->itensevento;
        $evento->imagemevento = $request->imagemevento;


        //Upload das imagens do evento
        if ($request->hasfile('imagemevento') && $request->file('imagemevento')->isValid()) {

            $arquivo = $request->imagemevento;
            $novoNome = 'IMAGEMEVENTO_' . uniqid() . '.' . $arquivo->getClientOriginalExtension();
            $arquivo->move('imageseventos', $novoNome);
            $evento->imagemevento = $novoNome;
        }

        $user = auth()->user();
        $evento->user_id = $user->id;
        $evento->save();
        return redirect('/gestoreventos')->with('msg', 'Evento Criado com sucesso!');
    }
    //==================================================================
    public function show($id)
    {

        if (!auth()->user()) {
            return redirect('/login');
        }

        $evento = Evento::findOrFail($id);

        return view('eventos.show', ['evento' => $evento]);
    }





    //==================================================================
    public function gestoreventos()
    {


        $eventos = Evento::all();

        $data = ['LoggedUserInfo' => Evento::where('id', '=', session('LoggedUser'))->first()];

        return view('gestoreventos', ['eventos' => $eventos], $data);
    }
    public function destroy($id)
    {

        Evento::findOrFail($id)->delete();

        return redirect('/gestoreventos')->with('msg', 'Evento Deletado');
    }
    public function formeditareventos($id)
    {
        $evento = Evento::findOrFail($id);
        return view('/eventos/formeditareventos', ['evento' => $evento]);
    }

    public function alterareventos(Request $request,$id)
    {

        $evento = Evento::findOrFail($id);
        $evento->nomecurso = $request->nomecurso;
        $evento->local = $request->local;
        $evento->valorevento = $request->valorevento;
        $evento->cargahoraria = $request->cargahoraria;
        $evento->periodo = $request->periodo;
        $evento->datainicial = $request->datainicial;
        $evento->datafinal = $request->datafinal;
        $evento->horainicial = $request->horainicial;
        $evento->horafinal = $request->horafinal;
        $evento->diassemana = $request->diassemana;
        $evento->formato = $request->formato;
        $evento->site = $request->site;
        $evento->descricao = $request->descricao;
        $evento->itensevento = $request->itensevento;
        $evento->imagemevento = $request->imagemevento;


        //Upload das imagens do evento
        if ($request->hasfile('imagemevento') && $request->file('imagemevento')->isValid()) {

            $arquivo = $request->imagemevento;
            $novoNome = 'IMAGEMEVENTO_' . uniqid() . '.' . $arquivo->getClientOriginalExtension();
            $arquivo->move('imageseventos', $novoNome);
            $evento->imagemevento = $novoNome;
        }
       
        $evento->save();

        return redirect('/gestoreventos')->with('msg', 'Evento Alterado com Sucesso!!!');
    }



    public function joinEvento($id, User $user, Request $request)
    {


        if (!auth()->user()) {
            return redirect('/login');
        } else {
            $user = auth()->user();
            $user->eventosCursos()->attach($id);




            $evento = Evento::findOrFail($id);



            $evento = new Checkin;
            $evento->nomealuno = $request->nomealuno;
            $evento->nomecurso = $request->nomecurso;
            $evento->datainicial = $request->datainicial;
            $evento->datafinal = $request->datafinal;
            $evento->horainicial = $request->horainicial;
            $evento->horafinal = $request->horafinal;
            $evento->periodo = $request->periodo;
            $evento->formato = $request->formato;
            $evento->valorevento = $request->valorevento;
            $evento->status = $request->status;
            $evento->cargahoraria = $request->cargahoraria;
            $evento->evento_id = $request->evento_id;
            $evento->user_id = $request->user_id;



            $evento->save();
        }



        return redirect('/paineldoaluno')->with('sucesso', 'Presença confirmada no curso - confirme no menu esquerdo em "Cursos Contratados": ', $evento->nomecurso);
    }

    public function eventosencerrados()
    {

        $eventos = Evento::all();

        $data = ['LoggedUserInfo' => Evento::where('id', '=', session('LoggedUser'))->first()];

        return view('/eventos/encerrados', ['eventos' => $eventos], $data);
    }
    public function checkin(){

        $consulta = Checkin::all();
        return view('/eventos/checkin', ['consulta' => $consulta]);
    }

    public function checkinaluno(User $user, $id){

         if (!auth()->user()) {
            return redirect('/login');
        } else {
            $user = auth()->user(); 
            $user->User::findOrFail($id); 
                    

            $consulta = Checkin::findOrFail($id);         
        }

        return view('/cursosrealizados', ['consulta' => $consulta]);
    }

    public function checkinpainelaluno($id)
    {

        /*
        $painelcheckin = Evento_User::all();
        return view('/eventos/checkinpainelaluno', ['painelcheckin' => $painelcheckin]);
        
        $eventos = Evento_User::findOrFail($id);
        $evento = Evento_User::findOrFail($id)->checkins; 
        foreach($evento as $dadosaluno);
        return view('/eventos/checkinpainelaluno',['eventos'=>$eventos,'dadosaluno'=>$dadosaluno]);
       

        $eventos = Evento_User::where('evento_id','evento_id')
        ->leftJoin('evento_users as evento','evento.checkin', '=', 'evento_id')
        ->select('checkin')->first();
        */


        $eventos = Evento_User::find($id);
        $evento = Evento_User::find($id)->checkins;


        return view('/eventos/checkinpainelaluno', compact('eventos', 'evento',));
    }

    public function calendariocursos()
    {
        $eventos = Evento::all();

        $data = ['LoggedUserInfo' => Evento::where('id', '=', session('LoggedUser'))->first()];

        return view('/eventos/calendariocursos', ['eventos' => $eventos], $data);
    }









    public function destroy_checkinpagamento($id)
    {
        Checkin::where('id', '=', $id)->delete();

        return redirect('/checkin')->with('msg', ' Curso Deletado!!!');
    }


    public function destroy_checkinpainel($id)
    {
        Evento_User::where('id', '=', $id)->delete();

        return redirect('/checkin')->with('msg', ' Curso Deletado Apenas do Painel do Aluno!!!');
    }



    public function formstatuscheckin($id)
    {

        $evento = Checkin::findOrFail($id);


        return view('eventos/formstatuscheckin', ['evento' => $evento]);
    }
    public function alteracheckin(Request $request)
    {
        Checkin::findOrFail($request->id)->update($request->all());
        return redirect('/checkin')->with('msg', 'Status Checkin Alterado com Sucesso!!!');
    }

    public function pesquisaidcursos()
    {

        $eventos = Evento::all();

        return view('/formularios/formpesquisaidcursos', ['eventos' => $eventos]);
    }

    public function pesquisaturmas($id)
    {

        $evento = Evento::findOrFail($id);

        return view('/formularios/formpesquisaturmas', ['evento' => $evento]);
    }

    public function excluircurso()
    {

        $eventos = Evento::all();

        $data = ['LoggedUserInfo' => Evento::where('id', '=', session('LoggedUser'))->first()];

        return view('eventos/excluircurso', ['eventos' => $eventos], $data);
    }

    public function trilhas(){
        $trilhas = Trilha::all();
        return view('cursos/trilhas',['trilhas'=>$trilhas]);
    }

    public function gestaodetrilhas()
    {
        $trilhas = Trilha::all();
        return view('/formularios/formgestaotrilhas', ['trilhas' => $trilhas]);
    }

    public function salvatrilhas(Request $request)
    {

        $trilha = new Trilha;
        $trilha->nometrilha = $request->nometrilha;
        $trilha->curso1=$request->curso1;
        $trilha->curso2=$request->curso2;
        $trilha->curso3=$request->curso3;
        $trilha->curso4=$request->curso4;
        $trilha->curso5=$request->curso5;
        $trilha->valor = $request->valor;
        $trilha->save();

        return redirect('/gestaodetrilhas')->with('msg', 'Trilha Salva com Sucesso');
    }



    public function destroytrilha($id)    {

        Trilha::findOrFail($id)->delete();

        return redirect('/gestaodetrilhas')->with('msg', 'Trilha Deletada');
    }

    public function editartrilha($id){
        $trilha = Trilha::findOrFail($id);
        return view('/formularios/formeditartrilhas', ['trilha' => $trilha]);
    }

    public function alteratrilha(Request $request)
    {

        Trilha::findOrFail($request->id)->update($request->all());

        return redirect('/gestaodetrilhas')->with('msg', 'Trilha Alterada com Sucesso!!!');
    }
}
